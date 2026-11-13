// Mobile navigation
const menuToggle = document.getElementById("menuToggle");
const mainNav = document.getElementById("mainNav");

menuToggle?.addEventListener("click", () => {
  const isOpen = mainNav.classList.toggle("open");
  menuToggle.setAttribute("aria-expanded", String(isOpen));
  menuToggle.setAttribute("aria-label", isOpen ? "Close navigation" : "Open navigation");
  menuToggle.textContent = isOpen ? "×" : "☰";
});

document.querySelectorAll(".nav a").forEach((link) => {
  link.addEventListener("click", () => {
    mainNav.classList.remove("open");
    menuToggle?.setAttribute("aria-expanded", "false");
    if (menuToggle) menuToggle.textContent = "☰";
  });
});

// Highlight the section currently in view.
const sections = document.querySelectorAll("main section[id]");
const navLinks = document.querySelectorAll(".nav a");

if ("IntersectionObserver" in window) {
  const sectionObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (!entry.isIntersecting) return;
      navLinks.forEach((link) => {
        link.classList.toggle("active", link.getAttribute("href") === `#${entry.target.id}`);
      });
    });
  }, { rootMargin: "-35% 0px -55% 0px" });

  sections.forEach((section) => sectionObserver.observe(section));
}

// Reveal sections as they enter the screen.
const revealItems = document.querySelectorAll(
  ".section-kicker, .section-heading-row, .about-grid, .focus-item, .skills-grid, .journey-grid, .project-card, .process-grid article, .contact-grid"
);
revealItems.forEach((item) => item.classList.add("reveal"));

if ("IntersectionObserver" in window) {
  const revealObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("is-visible");
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12 });
  revealItems.forEach((item) => revealObserver.observe(item));
} else {
  revealItems.forEach((item) => item.classList.add("is-visible"));
}

// Rotate the short role text in the hero.
const roleText = document.getElementById("roleText");
const roles = ["Artificial Intelligence", "Web Development", "Python & Data", "Science & Space"];
let roleIndex = 0;
if (roleText && !window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
  window.setInterval(() => {
    roleIndex = (roleIndex + 1) % roles.length;
    roleText.classList.add("role-changing");
    roleText.textContent = roles[roleIndex];
    window.setTimeout(() => roleText.classList.remove("role-changing"), 250);
  }, 2400);
}

// Animate skill bars when the skills section becomes visible.
const skillRows = document.querySelectorAll(".skill-row");
skillRows.forEach((row) => {
  const bar = row.querySelector(".bar i");
  if (bar) bar.style.setProperty("--skill-width", bar.style.width || "0%");
});
if ("IntersectionObserver" in window) {
  const skillObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("is-visible");
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.35 });
  skillRows.forEach((row) => skillObserver.observe(row));
} else {
  skillRows.forEach((row) => row.classList.add("is-visible"));
}

// Dark/light theme toggle. The choice is remembered in this browser.
const themeToggle = document.getElementById("themeToggle");
const savedTheme = localStorage.getItem("portfolio-theme");
if (savedTheme === "dark") document.body.classList.add("dark-mode");

function updateThemeButton() {
  if (!themeToggle) return;
  const dark = document.body.classList.contains("dark-mode");
  themeToggle.textContent = dark ? "☀" : "◐";
  themeToggle.setAttribute("aria-label", dark ? "Switch to light mode" : "Switch to dark mode");
}
updateThemeButton();

themeToggle?.addEventListener("click", () => {
  document.body.classList.toggle("dark-mode");
  localStorage.setItem(
    "portfolio-theme",
    document.body.classList.contains("dark-mode") ? "dark" : "light"
  );
  updateThemeButton();
});

// Project detail popups.
const projectDetails = {
  dataset: {
    category: "PYTHON · DATA ANALYSIS",
    title: "Dataset Analyzer Dashboard",
    description: "A learning project concept for uploading datasets, checking missing values and duplicates, cleaning data, generating charts, and producing a concise insight report.",
    note: "Current direction: Python, Pandas, data visualization, and eventually machine-learning-assisted analysis."
  },
  portal: {
    category: "WEB DEVELOPMENT",
    title: "School Portal Concept",
    description: "A school-focused web application concept where students can view scores and communicate with teachers, while teachers can manage marks and respond to comments.",
    note: "Learning focus: user accounts, database design, PHP, and responsible handling of student information."
  },
  vulcan: {
    category: "GFSSM · SPACE CONCEPT",
    title: "Vulcan City",
    description: "A concept for a circular settlement in Mars orbit, exploring how transport, energy, automation, and other systems might support a future space community.",
    note: "A conceptual competition project, not a built or operational space system."
  },
  hotel: {
    category: "REACT · FRONT-END DEVELOPMENT",
    title: "Olympic Hotel Website",
    description: "A responsive hotel website project exploring room listings, reusable interface components, page navigation, and a booking flow.",
    note: "Learning focus: React components, state, routing, form validation, and later backend integration."
  }
};

const projectModal = document.getElementById("projectModal");
const modalTitle = document.getElementById("modalTitle");
const modalCategory = document.getElementById("modalCategory");
const modalDescription = document.getElementById("modalDescription");
const modalNote = document.getElementById("modalNote");

function closeProjectModal() {
  projectModal?.classList.remove("open");
  projectModal?.setAttribute("aria-hidden", "true");
  document.body.classList.remove("modal-open");
}

document.querySelectorAll("[data-project]").forEach((button) => {
  button.addEventListener("click", () => {
    const details = projectDetails[button.dataset.project];
    if (!details || !projectModal) return;
    modalCategory.textContent = details.category;
    modalTitle.textContent = details.title;
    modalDescription.textContent = details.description;
    modalNote.textContent = details.note;
    projectModal.classList.add("open");
    projectModal.setAttribute("aria-hidden", "false");
    document.body.classList.add("modal-open");
    projectModal.querySelector(".modal-close")?.focus();
  });
});

projectModal?.querySelectorAll("[data-close-modal]").forEach((button) => {
  button.addEventListener("click", closeProjectModal);
});
document.addEventListener("keydown", (event) => {
  if (event.key === "Escape") closeProjectModal();
});

// Submit the contact form in the background and show feedback on the same page.
const contactForm = document.getElementById("contactForm");
const formFeedback = document.getElementById("formFeedback");

contactForm?.addEventListener("submit", async (event) => {
  event.preventDefault();
  if (!contactForm.reportValidity()) return;

  const submitButton = contactForm.querySelector(".submit-button");
  const submitLabel = submitButton?.querySelector(".submit-label");
  const originalLabel = submitLabel?.textContent || "Send message";

  if (submitButton) submitButton.disabled = true;
  if (submitLabel) submitLabel.textContent = "Sending...";
  formFeedback.textContent = "";
  formFeedback.className = "form-feedback";

  try {
    const response = await fetch(contactForm.action, {
      method: "POST",
      body: new FormData(contactForm),
      headers: { "X-Requested-With": "XMLHttpRequest" }
    });
    const result = await response.json();

    if (!response.ok || !result.success) {
      throw new Error(result.message || "Your message could not be sent. Please try again.");
    }

    formFeedback.textContent = result.message;
    formFeedback.classList.add("success");
    contactForm.reset();
  } catch (error) {
    formFeedback.textContent = error.message || "Something went wrong. Please try again.";
    formFeedback.classList.add("error");
  } finally {
    if (submitButton) submitButton.disabled = false;
    if (submitLabel) submitLabel.textContent = originalLabel;
  }
});

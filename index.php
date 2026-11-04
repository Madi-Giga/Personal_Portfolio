<?php
$pageTitle = "Abrham Belay | AI & Technology Enthusiast";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Abrham Belay — student, programmer, and AI & technology enthusiast building useful digital experiences.">
  <title><?= htmlspecialchars($pageTitle) ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<header class="site-header">
  <a class="brand" href="#home"><span class="brand-mark">A</span><span>AB<span class="brand-dot">.</span></span></a>
  <button class="menu-toggle" id="menuToggle" aria-label="Open navigation" aria-expanded="false">☰</button>
  <nav class="nav" id="mainNav">
    <a href="#home" class="active">Home</a><a href="#about">About</a><a href="#services">Focus</a>
    <a href="#skills">Skills</a><a href="#journey">Journey</a><a href="#projects">Projects</a><a href="#contact">Contact</a>
  </nav>
  <a class="header-cta" href="#contact">Let's connect <span>↗</span></a>
</header>

<main>
<section class="hero section-wrap" id="home">
  <div class="hero-copy">
    <div class="eyebrow"><span class="status-dot"></span> STUDENT · PROGRAMMER · FUTURE BUILDER</div>
    <h1>Hi, I'm <span>Abrham Belay.</span><br>Curious about technology.<br>Focused on <em>what's next.</em></h1>
    <p class="hero-lead">I’m a student and aspiring AI developer who enjoys turning ideas into practical digital projects. I’m learning, experimenting, and building toward a future where technology can make a meaningful difference.</p>
    <div class="hero-actions"><a class="btn btn-dark" href="#projects">Explore my work <span>↗</span></a><a class="text-link" href="#contact">Get in touch <span>→</span></a></div>
    <div class="hero-note"><span class="note-line"></span><span>Based in Ethiopia · Open to learning and collaboration</span></div>
  </div>
  <div class="hero-visual">
    <div class="visual-glow"></div>
    <div class="profile-card">
      <div class="profile-top"><span>PERSONAL PROFILE</span><span class="profile-symbol">✳</span></div>
      <div class="avatar-art"><div class="avatar-ring"></div><div class="avatar-letter">A<span>.</span></div><div class="orbit orbit-one"></div><div class="orbit orbit-two"></div></div>
      <div class="profile-bottom"><div><strong>Abrham Belay</strong><small>AI & Technology Enthusiast</small></div><span class="card-arrow">↗</span></div>
    </div>
    <div class="floating-chip chip-one"><span class="chip-icon">⌘</span><span><b>Build</b><small>Learn by doing</small></span></div>
    <div class="floating-chip chip-two"><span class="chip-icon chip-gold">✦</span><span><b>Explore AI</b><small>Think beyond limits</small></span></div>
    <div class="hero-index">01 / 07</div>
  </div>
</section>

<section class="logo-strip"><span>INTERESTED IN</span><b>ARTIFICIAL INTELLIGENCE</b><i></i><b>SOFTWARE DEVELOPMENT</b><i></i><b>SCIENCE & SPACE</b></section>

<section class="section section-wrap about-section" id="about">
  <div class="section-kicker">01 — ABOUT ME</div>
  <div class="section-heading-row"><h2>Learning with purpose.<br><em>Building with curiosity.</em></h2><p class="section-intro">A little about who I am, what I’m learning, and the direction I want to grow in.</p></div>
  <div class="about-grid">
    <div class="about-copy"><p class="large-copy">I’m Abrham, a high-school student from Ethiopia with a strong interest in programming, artificial intelligence, and science.</p><p>I enjoy understanding how things work—not just using technology, but learning how to create it. My experience so far includes web development, Python, data analysis, and exploring machine learning concepts.</p><p>My long-term goal is to develop technology skills that can help solve meaningful problems, especially in Africa. I believe consistent learning and building real projects are the best ways to get there.</p><a class="underlined-link" href="#journey">More about my journey <span>↗</span></a></div>
    <div class="stats-grid">
      <div class="stat-card"><strong>01</strong><span>Curiosity first</span><small>A habit of asking why</small></div>
      <div class="stat-card stat-dark"><strong>AI</strong><span>Future direction</span><small>Learning intelligent systems</small></div>
      <div class="stat-card stat-gold"><strong>∞</strong><span>Always learning</span><small>Growing one project at a time</small></div>
      <div class="stat-card"><strong>ET</strong><span>From Ethiopia</span><small>Thinking globally</small></div>
    </div>
  </div>
</section>

<section class="section section-wrap services-section" id="services">
  <div class="section-kicker">02 — AREAS OF FOCUS</div>
  <div class="section-heading-row"><h2>What I’m <em>exploring.</em></h2><p class="section-intro">The areas I’m actively learning and want to keep developing.</p></div>
  <div class="focus-list">
    <article class="focus-item"><span class="focus-number">01</span><div><h3>Artificial Intelligence & Machine Learning</h3><p>Exploring machine learning fundamentals, data, and how intelligent systems can solve real problems.</p></div><span class="focus-arrow">↗</span></article>
    <article class="focus-item"><span class="focus-number">02</span><div><h3>Web Development</h3><p>Building responsive websites and learning how front-end interfaces connect with back-end systems.</p></div><span class="focus-arrow">↗</span></article>
    <article class="focus-item"><span class="focus-number">03</span><div><h3>Python & Data Analysis</h3><p>Working with Python and data tools to clean information, explore patterns, and communicate insights.</p></div><span class="focus-arrow">↗</span></article>
    <article class="focus-item"><span class="focus-number">04</span><div><h3>Science, Space & Innovation</h3><p>Interested in science-driven ideas, space technology, and ambitious engineering concepts.</p></div><span class="focus-arrow">↗</span></article>
  </div>
</section>

<section class="section skills-section" id="skills"><div class="section-wrap">
  <div class="section-kicker">03 — SKILLS & TOOLS</div>
  <div class="section-heading-row"><h2>Tools I use.<br><em>Skills I’m growing.</em></h2><p class="section-intro">A snapshot of my current learning. I’m still developing these skills, so this is not a claim of professional mastery.</p></div>
  <div class="skills-grid">
    <div class="skills-copy"><span class="mini-label">CURRENT TOOLKIT</span><h3>From writing code<br>to understanding data.</h3><p>I focus on understanding the concepts behind the tools, then applying them in small projects. I’m especially interested in connecting software development with AI.</p><div class="tool-tags"><span>Python</span><span>HTML</span><span>CSS</span><span>JavaScript</span><span>PHP</span><span>React</span><span>Git & GitHub</span><span>Pandas</span><span>Scikit-learn</span></div></div>
    <div class="skill-bars">
      <div class="skill-row"><div><b>HTML & CSS</b><span>Web foundations</span></div><div class="bar"><i style="width:78%"></i></div></div>
      <div class="skill-row"><div><b>JavaScript</b><span>Interactive interfaces</span></div><div class="bar"><i style="width:58%"></i></div></div>
      <div class="skill-row"><div><b>Python</b><span>Programming & data</span></div><div class="bar"><i style="width:65%"></i></div></div>
      <div class="skill-row"><div><b>Machine Learning</b><span>Foundations in progress</span></div><div class="bar"><i style="width:42%"></i></div></div>
      <p class="skills-footnote">Progress indicators are approximate self-assessments, not test scores.</p>
    </div>
  </div>
</div></section>

<section class="section section-wrap journey-section" id="journey">
  <div class="section-kicker">04 — MY JOURNEY</div>
  <div class="section-heading-row"><h2>Still learning.<br><em>Already building.</em></h2><p class="section-intro">My journey so far is a mix of school, independent learning, competitions, and hands-on projects.</p></div>
  <div class="journey-grid">
    <div><span class="timeline-label">EDUCATION & LEARNING</span><div class="timeline">
      <article><span class="timeline-dot"></span><small>ONGOING</small><h3>High School Studies</h3><p>Building a strong foundation in mathematics and science while preparing for the next stage of my education.</p></article>
      <article><span class="timeline-dot"></span><small>ONGOING</small><h3>Independent Programming</h3><p>Learning web development, Python, data analysis, and AI through online courses and practical exercises.</p></article>
      <article><span class="timeline-dot"></span><small>COURSEWORK</small><h3>AI & Programming Courses</h3><p>Completed learning activities and certificates, including Udacity AI Fundamentals and programming coursework.</p></article>
    </div></div>
    <div><span class="timeline-label">ACTIVITIES & RECOGNITION</span><div class="timeline">
      <article><span class="timeline-dot gold-dot"></span><small>PROJECT EXPERIENCE</small><h3>GFSSM — Vulcan City</h3><p>Contributed to a concept for a Mars-orbit colony, exploring space settlement, transport, and supporting technologies.</p></article>
      <article><span class="timeline-dot gold-dot"></span><small>COMPETITION</small><h3>Science & Technology Activities</h3><p>Participated in science-focused activities and project work that strengthened my interest in innovation.</p></article>
      <article><span class="timeline-dot gold-dot"></span><small>CONTINUOUS</small><h3>Building a Portfolio</h3><p>Turning what I learn into websites, small applications, and experiments that help me improve.</p></article>
    </div></div>
  </div>
</section>

<section class="section projects-section" id="projects"><div class="section-wrap">
  <div class="section-kicker">05 — SELECTED PROJECTS</div>
  <div class="section-heading-row"><h2>Ideas turned into<br><em>experiments.</em></h2><p class="section-intro">A selection of projects and concepts I’ve worked on. Some are ongoing learning projects.</p></div>
  <div class="project-grid">
    <article class="project-card project-feature"><div class="project-art art-dashboard"><div class="dash-top"><span>DATA INSIGHTS</span><span>•••</span></div><div class="dash-number">Dataset overview</div><div class="dash-bars"><i></i><i></i><i></i><i></i><i></i><i></i><i></i></div><div class="dash-bottom"><span>01 / ANALYZE</span><span>↗</span></div></div><div class="project-meta"><span>PYTHON · DATA ANALYSIS</span><span>01</span></div><h3>Dataset Analyzer Dashboard</h3><p>A learning project concept designed to upload datasets, inspect data quality, create visualizations, and generate useful insights.</p><span class="project-status">IN DEVELOPMENT</span></article>
    <article class="project-card"><div class="project-art art-portal"><div class="portal-window"><div class="portal-side"></div><div class="portal-content"><i></i><i></i><i></i><b></b></div></div><span class="art-caption">STUDENT PORTAL</span></div><div class="project-meta"><span>WEB DEVELOPMENT</span><span>02</span></div><h3>School Portal Concept</h3><p>A web application concept for viewing student scores and supporting communication between students and teachers.</p><span class="project-status">LEARNING PROJECT</span></article>
    <article class="project-card"><div class="project-art art-space"><div class="planet"></div><div class="space-orbit"></div><span class="space-star s1">✦</span><span class="space-star s2">✧</span><span class="space-label">VULCAN CITY</span></div><div class="project-meta"><span>SPACE · SCIENCE CONCEPT</span><span>03</span></div><h3>Vulcan City</h3><p>A Mars-orbit colony concept explored through GFSSM, imagining systems that could support a future space settlement.</p><span class="project-status">COMPETITION PROJECT</span></article>
    <article class="project-card"><div class="project-art art-hotel"><div class="hotel-word">OLYMPIC<small>HOTEL EXPERIENCE</small></div><div class="hotel-line"></div><span class="hotel-number">H / 01</span></div><div class="project-meta"><span>REACT · FRONT END</span><span>04</span></div><h3>Olympic Hotel Website</h3><p>A responsive hotel website project exploring reusable components, room listings, routing, and booking interfaces.</p><span class="project-status">WEB PROJECT</span></article>
  </div>
</div></section>

<section class="section process-section"><div class="section-wrap">
  <div class="section-kicker">06 — HOW I LEARN</div><div class="section-heading-row"><h2>My approach to<br><em>getting better.</em></h2><p class="section-intro">A simple loop I try to follow whenever I learn something new.</p></div>
  <div class="process-grid"><article><span>01</span><h3>Understand</h3><p>Learn the core idea and ask questions until the concept makes sense.</p></article><article><span>02</span><h3>Experiment</h3><p>Try small examples, make mistakes, and explore how things behave.</p></article><article><span>03</span><h3>Build</h3><p>Apply the knowledge to a project that solves a clear problem.</p></article><article><span>04</span><h3>Improve</h3><p>Review what worked, identify gaps, and keep refining the result.</p></article></div>
</div></section>

<section class="contact-banner"><div class="section-wrap contact-banner-inner"><div><span class="mini-label">HAVE AN IDEA OR OPPORTUNITY?</span><h2>Let's learn, build,<br><em>and make something useful.</em></h2></div><a href="#contact" class="btn btn-light">Get in touch <span>↗</span></a></div></section>

<section class="section section-wrap contact-section" id="contact">
  <div class="section-kicker">07 — CONTACT</div><div class="section-heading-row"><h2>Say <em>hello.</em></h2><p class="section-intro">Have a question, a learning opportunity, or an interesting project idea? Send me a message.</p></div>
  <div class="contact-grid">
    <div class="contact-copy"><h3>Let’s start a conversation.</h3><p>I’m interested in connecting with people who care about technology, science, and learning. Use the form and I’ll get back to you when I can.</p><div class="contact-detail"><span>LOCATION</span><b>Ethiopia</b></div><div class="contact-detail"><span>INTERESTS</span><b>AI · Programming · Science</b></div><div class="contact-detail"><span>EMAIL</span><b>Add your email address here</b></div></div>
    <form class="contact-form" action="message.php" method="POST">
      <div class="form-row"><label>Your name<input type="text" name="name" placeholder="Your name" required maxlength="100"></label><label>Your email<input type="email" name="email" placeholder="you@example.com" required maxlength="150"></label></div>
      <label>Subject<input type="text" name="subject" placeholder="What is this about?" required maxlength="150"></label>
      <label>Your message<textarea name="message" rows="5" placeholder="Write your message..." required maxlength="3000"></textarea></label>
      <button class="btn btn-dark" type="submit">Send message <span>↗</span></button>
      <p class="form-note">The form uses PHP and MySQL. Set up the database using the included <code>database.sql</code> file.</p>
    </form>
  </div>
</section>
</main>

<footer class="footer"><div class="section-wrap footer-inner"><a class="brand" href="#home"><span class="brand-mark">A</span><span>AB<span class="brand-dot">.</span></span></a><p>Curiosity in mind. Technology in progress.</p><span>© <?= date("Y") ?> Abrham Belay</span></div></footer>
<script src="assets/script.js"></script>
</body>
</html>

ABRHAM BELAY — PERSONAL PORTFOLIO
=================================

PROJECT CONTENTS
----------------
index.php       Main portfolio page (HTML structure with a small PHP page title/year)
assets/style.css  Layout, colors, typography, responsive design and animations/transitions
assets/script.js  Mobile navigation and active navigation highlighting
connect.php     Connects PHP to the MySQL database
message.php     Validates and saves contact-form submissions
database.sql    Creates the database and messages table

LANGUAGES AND WHAT THEY DO
--------------------------
1. HTML
   Provides the structure and content: navigation, hero, about, skills, project cards,
   journey timeline, and contact form. The HTML is inside index.php.

2. CSS
   Controls the appearance: spacing, colors, typography, cards, layout, responsive
   mobile design, and hover effects. It is in assets/style.css.

3. JavaScript
   Adds browser-side interaction: mobile menu open/close and active navigation state.
   It is in assets/script.js.

4. PHP
   Runs on the server. It loads the page, receives contact form submissions, validates
   the fields, and works with MySQL. It is in index.php, connect.php, and message.php.

5. SQL / MySQL
   Stores submitted contact messages. database.sql creates the database and table.

RUN IT WITH XAMPP
-----------------
1. Extract the abrham_workfolio folder into:
   C:\xampp\htdocs\

2. Start Apache and MySQL from the XAMPP Control Panel.

3. Open phpMyAdmin:
   http://localhost/phpmyadmin

4. Import database.sql (or open its SQL tab and run its contents).

5. Open the website:
   http://localhost/abrham_workfolio/

6. Test the contact form. The message should appear in phpMyAdmin:
   abrham_portfolio > messages

IMPORTANT PERSONAL CUSTOMIZATION
--------------------------------
- The email line currently says "Add your email address here" because your email was
  not provided. Replace it in index.php with an email address you want public.
- Add your real profile photo if you want one. The current hero uses an original
  CSS-built letter illustration, not a fake portrait.
- Add your actual GitHub, LinkedIn, certificates, and project links when ready.
- Skill bars are rough self-assessments, not measured scores. Adjust or remove them.
- The experience section describes learning and activities; it does not invent
  professional employment or a university degree.

NOTES
-----
This is an original implementation inspired by the section order and clean editorial
portfolio feel of the Workfolio demo. It does not include BootstrapMade's source code,
licensed template files, or original images.

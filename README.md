# CodeIgniter 4 Framework

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds the distributable version of the framework.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

The user guide corresponding to the latest version of the framework can be found
[here](https://codeigniter4.github.io/userguide/).

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.


## Server Requirements

PHP version 7.4 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
# College_Automation

The College Office Automation System is a robust web-based solution meticulously designed to automate key administrative functions within an educational institution. This project leverages distributed client-server computing technology for enhanced accessibility and efficiency, catering to users including administrators, office staff, and students. Facilitates secure registration and authentication for students, faculty, and administrative staff. Implements robust authentication mechanisms to ensure data integrity and user privacy.
Facilitates secure registration and authentication for administrators, office staff, and students. Implements role-based access control, empowering administrators and office staff with specific permissions.
Enables office staff and administrators to seamlessly create, edit, and delete student records. Upon successful registration, students receive an email with temporary login credentials.
 Students can log in using provided credentials to view and update their profiles. Allows students to add additional information such as hobbies, skills, and alternative contact details.
At the beginning of each academic year, office staff create a fee setup with details like amount and due dates. Office staff initiate the fee allocation process, considering academic years and student programs,(with exceptions handled).
Allocates fees to students based on the academic year and program, incorporating any exceptions. Streamlines the process to efficiently manage financial transactions.
Provides office staff with tools to view student dues and generate comprehensive fee reports. Enhances financial oversight and reporting capabilities.
Enables office staff to collect fees from students, facilitating a smooth payment process. Generates bills and shares them with students after successful payment transactions.
Adopts a distributed architecture with centralized database storage for efficient data management. Ensures secure database systems to protect sensitive information.
Leverages MySQL database management and CodeIgniter 4 framework for developing an intuitive user interface, ensuring a seamless and user-friendly experience. Implements efficient database connectivity methodologies, aligning with the modern web development practices embraced by CodeIgniter 4.
Adheres to stringent security standards to safeguard sensitive data. Incorporates data protection mechanisms to ensure secure and responsible system usage.
Empowers administrators with privileges for managing user accounts, system configurations, and data. Provides centralized control for effective oversight of the entire college office automation system.
The College Office Automation System serves as an integral platform, automating crucial administrative processes in educational institutions. Tailored for administrators, office staff, and students, the system enhances efficiency, transparency, and accessibility in student management and fee-related operations.

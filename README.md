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

# College Office Automation System

The College Office Automation System is a comprehensive, web-based solution designed to streamline key administrative functions within educational institutions. Leveraging distributed client-server computing technology, this project aims to enhance accessibility and efficiency for administrators, office staff, and students. The system prioritizes secure registration, authentication, and data integrity, ensuring a robust and reliable platform.

## Features

### Secure Registration and Authentication

- Implements robust authentication mechanisms for administrators, office staff, and students.
- Facilitates secure registration and ensures data privacy.
- Utilizes role-based access control for specific permissions.

### Student Records Management

- Enables office staff and administrators to create, edit, and delete student records seamlessly.
- Sends email notifications with temporary login credentials upon successful student registration.
- Allows students to log in and update their profiles, including additional information like hobbies and skills.

### Fee Management

- Office staff initiates fee setup at the beginning of each academic year.
- Allocates fees to students based on academic year and program, handling exceptions efficiently.
- Streamlines financial transactions and enhances reporting capabilities.

### Financial Oversight

- Provides tools for office staff to view student dues and generate comprehensive fee reports.
- Facilitates fee collection, generating bills and sharing them with students after successful transactions.

### Distributed Architecture

- Adopts a distributed architecture with centralized database storage for efficient data management.
- Utilizes MySQL database management and CodeIgniter 4 framework for an intuitive user interface.
- Implements efficient database connectivity methodologies aligned with modern web development practices.

### Security Standards

- Adheres to stringent security standards to safeguard sensitive data.
- Incorporates data protection mechanisms to ensure secure and responsible system usage.

### Administrative Privileges

- Empowers administrators with privileges for managing user accounts, system configurations, and data.
- Provides centralized control for effective oversight of the entire college office automation system.

## Technology Stack

- Frontend: HTML, CSS, JavaScript, Ajax, JQuerygi
- Backend: CodeIgniter 4 framework
- Database: MySQL

## Installation

1. Clone the repository: `git clone https://github.com/rahul-binu/College_Automation.git`
2. Set up the database using the provided SQL scripts.
3. Configure the system by modifying the configuration files as needed.
4. Run the application and access it through the designated URL.

## Contributing

Contributions are welcome! Please follow the [Contribution Guidelines](CONTRIBUTING.md) for more details.

## License

This project is licensed under the [MIT License](LICENSE).

---

**Note:** This README provides an overview; detailed installation and usage instructions may be found in the project documentation.

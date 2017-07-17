Property Web Builder
====================
This is a ready to use Laravel based web application for creating real estate websites. 

Description
============
This is a real estate web application that agents and agencies can use to list available properties. 
This project is inspired by [etewiah's project](https://github.com/etewiah/property_web_builder) which was created with Ruby on Rails

How to use
==========
- Clone this repo
- Run *php artisan migrate*
- Run *php artisan db:seed*
- use these credentials to login test@test.com test123


Technology Stack
================
- The application is based on *Laravel 5.4* 
- The Backend uses [AdminLTE Template](https://github.com/almasaeed2010/AdminLTE)

Features TODOs
==============

Front-End
---------
- Home Page
- List Properties for Sale
- List Properties for Renting
- Property details page
- About Agency Page
- Contact Agency Page

Admin-End
---------
- Dashboard/Statistics
- Edit Home Page Contents
- Edit Site Contents: Privacy Policy, Terms, Social Media Account Links. The database migration has been created
  for this already. Just follow the existing style to implement your additions. 
  The controller is `SiteContentsController.php`
- Manage Users from the Backend


Features IMPLEMENTED
====================
Admin-End
--------
- Admin Template Completely setup
- Authentication/Registration
- Adding of Properties
- Editing/Updating of Properties with photos, location and property features
- Database Migrations and Seeder
- Site Content: About, Contact, Terms and Conditions and Footer.
- Site Settings: Features, Property Types, Property States, and Currency.


Front-End
---------
- 


SETUP ERRORS/CONFIG
====================
If you are encountering errors during installation or setup you can read the SETUP_CONFIG.md file in the root of the application. It may contain the solution



Sponsors
========
**We need a sponsor to provide us with a demo server**

Property Web Builder is proudly sponsored by
- [Prodsters Community](https://prodsters.com) - A community of African talents capable of handling your outsourced projects

Contribution Guideline
======================
- Pick a feature in the todo list that you want to implement or suggest one
- Kindly reach out to hello[at]prodsters.com
- We will get back to you and add you to the repo as a contributor


License
=======
[Apache 2.0](LICENSE)
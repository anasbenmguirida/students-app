
# Students web application

This is an online web application for academic tasks, where students and professors can perform several tasks.

Students: They can request administrative documents and consult their grades once they are submitted.

Professors: They can mark attendance for the classes they teach and enter grades for exams based on the subjects they teach.

Administration : admins can process and fulfill student requests for administrative documents. 


## Appendix

The application uses Laravel 10 for the backend, Blade for the frontend, and Bootstrap 4 for styling.


## 🚀 About Me
I'm a backend developer student at the NATIONAL SCHOOL OF APPLIED SCIENCE in Tangier , Morocco  


## Run Locally
It's recommanded to have a Mysql server runing before trying the app!

Clone the project

```bash
  git clone https://github.com/anasbenmguirida/students-app.git
```

Go to the project directory

```bash
  cd students-app
```

Install dependencies

```bash
  composer install
```

Generate an app key  

```bash
  php artisan key:generate
```

Start the server

```bash
  php artisan serve
```

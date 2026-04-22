# 🎓 CampusHire – Placement Portal Website

##  Overview

CampusHire is a web-based placement portal designed to help students find job opportunities, apply for roles, and track applications. It also allows administrators to manage job listings efficiently.

---



###  Student

* Register and Login
* View available jobs
* Apply for jobs
* Dashboard access

###  Admin (Basic)

* Add job listings
* View applicants (via database)

---

## 🛠️ Tech Stack

* **Frontend:** HTML, CSS, JavaScript
* **Backend:** PHP
* **Database:** MySQL
* **Server:** XAMPP (Apache + MySQL)

---

##  Project Structure

```
campus-hire/
│
├── index.html
├── about.html
├── login.html
├── register.html
├── dashboard.php
├── jobs.php
│
├── css/
│   └── style.css
│
├── js/
│   ├── login.js
│   └── register.js
│
├── php/
│   ├── db.php
│   ├── login.php
│   ├── register.php
│   ├── logout.php
│   ├── add_job.php
│   └── apply.php
```

---




##  How It Works

1. User registers → stored in database
2. User logs in → session created
3. Jobs are fetched from database
4. User applies → stored in applications table

---

## ⚠️ Known Limitations

* No password encryption (for simplicity)
* Admin panel is basic
* No resume upload (can be added)

---

##  Future Improvements

* Add admin dashboard UI
* Resume upload feature
* Email notifications
* Better UI/UX design

---

##  Author

deepti, kriti sharma, ayush 

---

##  License

This project is for educational purposes only.


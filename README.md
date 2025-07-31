# ☀️ Solar-Solutions

**Solar-Solutions** is a responsive web platform that allows customers to **customize solar packages**, **calculate energy loads**, and **book maintenance services**. The system is built using **PHP**, **MySQL**, **JavaScript**, and **CSS**, with an admin panel for full product and recommendation management.

---

## 🌟 Key Features

### 👨‍💼 Admin Panel
- 🔐 Admin Login
- 📊 Admin Dashboard
- 🛠️ Manage Products (Add, Update, Delete)
- 📦 Manage Recommended Packages
  - ➕ Add
  - ✏️ Update
  - ❌ Delete

### 👤 Customer Features
- 🧰 Build a Customized Solar Package
- 🔢 Energy Load Calculator
- 👀 View Recommended Packages
- 🧾 Book Maintenance Service
- 💬 Submit Feedback
- 🔐 Login / Logout
- 📝 Sign Up

---

## 🛠️ Technologies Used

- 💻 **PHP** – Backend logic
- 🗄️ **MySQL** – Database for storing users, packages, products, and feedback
- 🎨 **CSS** – Custom styles with responsiveness
- ⚙️ **JavaScript** – Interactive frontend behavior
- 📱 **Fully Responsive Design** – Works well across desktops, tablets, and mobiles

---

## 🚀 How to Run the Project

1. ✅ **Start Apache & MySQL** in XAMPP.

2. 📂 **Move the project folder** to:
   ```
   C:\xampp\htdocs\Solar-Solutions
   ```

3. 🌐 **Update `SITEURL` in config file**:
   ```php
   define('SITEURL', 'http://Your_Pc_IPv4_Address:8080/Solar-Solutions/');
   ```
   - Replace `Your_Pc_IPv4_Address` with your actual IPv4.
   - Get it using:
     ```
     ipconfig
     ```

4. 🛠️ **Create the database**:
   - Open **phpMyAdmin** (`http://localhost/phpmyadmin`)
   - Import the SQL file (e.g., `solar_solutions.sql`) to set up tables.

5. 🧪 Open in browser:
   ```
   http://localhost:8080/Solar-Solutions/
   ```

---

## 📸 Project Screenshots

> Make sure the `screenshots` folder exists in your repo and includes the following image files.

### 🏠 Home Page
<p align="center">
  <img src="screenshots/home.png" width="600"/>
</p>

### 🧮 Energy Load Calculator
<p align="center">
  <img src="screenshots/energy_calc.png" width="600"/>
</p>

### 🧰 Customize Package
<p align="center">
  <img src="screenshots/customize_package.png" width="600"/>
</p>

### 🔧 Book Maintenance Service
<p align="center">
  <img src="screenshots/book_maintenance.png" width="600"/>
</p>

### 📦 Recommended Packages
<p align="center">
  <img src="screenshots/recommended_packages.png" width="600"/>
</p>

### 📋 Admin Dashboard
<p align="center">
  <img src="screenshots/admin_dashboard.png" width="600"/>
</p>

---

## 📈 Why This Project?

⚡ In an era where **solar energy** is a crucial step toward sustainability, this system enables customers to make informed decisions about their energy needs. With tools like **custom packages** and **load calculators**, it offers both flexibility and functionality in one clean, interactive interface.

---

## 📬 Feedback and Contributions

- 💡 Got suggestions? Feedback?
- 🛠️ Want to contribute? Fork and make a pull request!

---

## 📄 License

This project is open source and available under the [MIT License](LICENSE).

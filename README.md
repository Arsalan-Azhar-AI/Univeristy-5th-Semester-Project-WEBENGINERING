
# University 5th Semester Project - Web Engineering (Library Management System)

**Overview:**
This is a **Library Management System** developed as a semester project for Web Engineering. The system manages university library operations including book inventory, member accounts, and book borrowing/returning processes. Built using **PHP**, **MySQL**, and **CSS**, it demonstrates practical full-stack web development and database management.

**Features:**

* **Admin Dashboard:**

  * Admin login to manage the library.
  * Add or remove library members.
  * Add, edit, or delete books.
  * Monitor book borrowing and returns.

* **User/Members Portal:**

  * Members can log in to view available books.
  * Borrow and return books.
  * View borrowing history.

* **Database Integration:**

  * MySQL database with tables for `members`, `books`, and `loans`.
  * Secure connections via `db.php`.

* **Responsive Design:**

  * Styled using custom CSS for a clean and intuitive UI.

**Tech Stack:**

* Backend: PHP
* Database: MySQL
* Frontend: HTML, CSS

**Setup Instructions (2026):**

1. **Clone the Repository:**

   ```bash
   git clone https://github.com/Arsalan-Azhar-AI/Univeristy-5th-Semester-Project-WEBENGINERING.git
   ```

2. **Database Setup:**

   * Create a MySQL database (e.g., `library_db`).
   * Create necessary tables:

     * `members` (member info, login credentials)
     * `books` (title, author, copies)
     * `loans` (track borrowed books)
   * Update credentials in `db.php`.

3. **Run the Project:**

   * Open `loginadmin_server_page.php` for admin access.
   * Add members and books via the dashboard.
   * Members can log in through `login_server_page.php` to borrow/return books.

**Usage:**

* **Admin:** Manage books, add/remove members, monitor loans.
* **Member:** View available books, borrow/return books, track history.

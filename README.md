# Fort Bend County Archive Browser

[![Made with PHP](https://img.shields.io/badge/PHP-7%2F8-777BB4?logo=php&logoColor=white)](https://www.php.net/) 
[![License: MIT](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE) 
![Status](https://img.shields.io/badge/Status-Demo-blue) 

A **custom PHP archive browser** built for **Fort Bend County (TX)**.  
Connects to a remote FTP server, lists directories/files, hides sensitive folders, and provides a clean UI with icons and breadcrumbs.

---

## ✨ Features
- **FTP Integration** – connects to remote FTP, retrieves files and folders.  
- **Breadcrumb Navigation** – easy navigation across directory levels.  
- **Responsive Grid Layout** – folders and files displayed in a clean 3-column grid.  
- **Icons for Files/Folders** – SVG-based icons for folders, files, up-navigation, and downloads.  
- **Hidden Items** – skips sensitive/internal folders (`archive`, `aspnet client`) and file types (`.bat`, `.log`, `.txt`).  
- **Clean URLs** – removes extra `/calendars/` or `.gov.` mistakes.  

---

## 🛠️ Tech Stack
- **Backend:** PHP 7/8  
- **Frontend:** HTML, CSS (responsive grid)  
- **Integration:** FTP (remote file system)  
- **Icons:** SVG (inline, lightweight, accessible)  

---

## 📂 Repo Contents
- `src/index.php` – main archive browser logic  
- `src/config.php` – FTP credentials/settings (placeholder)  
- `src/helpers.php` – helper functions (icons, cleaning, breadcrumbs)  
- `screenshots/` – demo screenshots of UI  


---

## 🔗 Related Work
- 🌐 [Fort Bend County Website](https://www.fortbendcountytx.gov/)  

---

## ⚖️ License
This repo includes **sanitized demo code** (no production credentials). Licensed under MIT.

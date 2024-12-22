# FUT Champions Ultimate Team - Backend

A robust backend platform for the FUT Champions Ultimate Team, managing player data, teams, nationalities, and analytics. Built with **PHP** (procedural) and **MySQLi** for efficient database management.

## 🌟 Key Features

### Data Analysis & Optimization
- JSON data analysis for optimal database structure design
- Data normalization principles implementation
- Relational schemas for players, teams, and nationalities

### Entity Management
- **Players**: Add, remove, and display player information
- **Teams**: Manage team composition and details
- **Nationalities**: Handle player nationalities
- Inter-entity relationships management

### Dashboard & Analytics
- Dynamic dashboard displaying key statistics:
  - Total player count
  - Nationality distribution
  - Team performance metrics
- Interactive charts powered by Chart.js

## 📁 Project Structure

```
/FUT-Champions-Web-App-Ultimate-Team-sprint-2-breif-3
├── /dashboard
│   ├── /html
│   │   └── dashboard.php         # Main dashboard
│   ├── /includes
│   │   ├── config.php           # Database configuration
│   │   ├── functions.php        # Utility functions
│   │   └── lang.php            # Language management
│   └── /vendor                  # PHP dependencies
├── /sql
│   └── create_tables.sql        # Database creation script
├── .env                         # Environment variables
└── README.md                    # Project documentation
```

## 🔧 Prerequisites

- PHP 7.4 or higher
- MySQLi extension
- Local server (XAMPP/MAMP)
- Composer (for PHP dependencies)

## 🚀 Installation

### 1. Clone the Repository
```bash
git clone https://github.com/your-username/fut-champions.git
cd fut-champions
```

### 2. Install Dependencies
```bash
composer install
```

### 3. Database Setup
1. Create a MySQL database for the project
2. Execute the SQL script:
   ```bash
   mysql -u your_username -p your_database_name < sql/create_tables.sql
   ```
3. Configure your `.env` file:
   ```env
   DB_HOST=localhost
   DB_USER=your_username
   DB_PASS=your_password
   DB_NAME=your_database_name
   ```

### 4. Launch the Application
1. Place the project in your local server directory
2. Access the dashboard:
   ```
   http://localhost/FUT-Champions-Web-App-Ultimate-Team-sprint-2-breif-3/dashboard/html/dashboard.php
   ```

## 📖 Documentation

### File Structure Overview
- `dashboard/html/`: Contains frontend PHP files
- `dashboard/includes/`: Core functionality files
- `sql/`: Database scripts and schemas
- `.env`: Environment configuration

### Key Functions
- Player Management: `functions.php`
- Database Operations: `config.php`
- Multilingual Support: `lang.php`

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit changes (`git commit -m 'Add AmazingFeature'`)
4. Push to branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📝 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 📧 Contact

Your Name - [your.email@example.com](mailto:your.email@example.com)
Project Link: [https://github.com/your-username/fut-champions](https://github.com/your-username/fut-champions)

## 🙏 Acknowledgments

- Chart.js for data visualization
- Composer for dependency management
- XAMPP/MAMP development environment

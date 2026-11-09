# Magento 2 Customer Testimonials Extension

[![Magento 2.4.x](https://img.shields.io/badge/Magento-2.4.x-orange.svg?logo=magento)](https://business.adobe.com/products/magento/magento-commerce.html)
[![PHP 8.1 | 8.2 | 8.3](https://img.shields.io/badge/PHP-8.1%20%7C%208.2%20%7C%208.3-777BB4.svg?logo=php)](https://www.php.net/)
[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE)
[![Upwork Top Rated](https://img.shields.io/badge/Upwork-Available%20for%20Hire-green.svg?logo=upwork)](https://www.upwork.com/freelancers/priyankjivani)

An enterprise-ready, open-source **Magento 2 / Adobe Commerce** extension for managing customer social proof, reviews, and testimonials. Engineered following Magento Service Contracts, modern Declarative Schema, Symfony Console CLI commands, and headless REST Web APIs.

Developed and maintained by **[Priyank Jivani](https://github.com/priyankjivani123)** (Senior Magento 2 Backend Developer).

---

## 🚀 Key Features

* **Admin UI Component Grid & Form**: Full-featured admin management panel with sorting, inline filtering, pagination, column toggles, and mass actions (Delete, Enable, Disable).
* **Declarative Schema (`etc/db_schema.xml`)**: Built following Magento 2.3+ database declarative schema standards with automatic table creation and schema validation.
* **REST Web API Endpoints (`etc/webapi.xml`)**: Complete headless support with CRUD endpoints via `TestimonialsRepositoryInterface`.
* **High-Performance CLI CSV Importer**: Dedicated Symfony Console command (`bin/magento testimonials:import`) to bulk-import testimonials from CSV files with transactional validation.
* **Image Uploader & Media Storage**: Clean admin avatar and image uploads utilizing Magento's core `ImageUploader` and Pub/Media lifecycle management.
* **Repository Pattern & Service Contracts**: Strict adherence to Magento architectural best practices (Interface segregation, Data transfer objects, Repository contracts).
* **Multi-Store & Multilingual Ready**: Translatable strings via `i18n/en_US.csv`.

---

## 🛠 Technical Requirements

| Stack Component | Minimum Requirement | Recommended |
| :--- | :--- | :--- |
| **Magento / Adobe Commerce** | 2.4.4+ | 2.4.6, 2.4.7+ |
| **PHP** | 8.1.0+ | 8.2 or 8.3 |
| **Database** | MySQL 8.0+ / MariaDB 10.4+ | MySQL 8.0 |
| **Composer** | 2.x | 2.x |

---

## 📦 Installation Instructions

### Option 1: Composer Installation (Recommended)

Run the following commands in your Magento root directory:

```bash
composer require priyank/module-customer-testimonials
bin/magento module:enable Priyank_Testimonials
bin/magento setup:upgrade
bin/magento setup:di:compile
bin/magento setup:static-content:deploy -f
bin/magento cache:flush
```

### Option 2: Manual Installation

1. Create directory `app/code/Priyank/Testimonials`.
2. Clone or extract this repository into `app/code/Priyank/Testimonials`.
3. Enable module and compile:

```bash
bin/magento module:enable Priyank_Testimonials
bin/magento setup:upgrade
bin/magento setup:di:compile
bin/magento setup:static-content:deploy -f
bin/magento cache:flush
```

---

## 💻 CLI Bulk CSV Import

Import large batches of testimonials directly via command line:

```bash
bin/magento testimonials:import <path-to-csv-file>
```

**Example:**
```bash
bin/magento testimonials:import samples/testimonials.csv
```

### CSV File Structure

The importer expects a CSV header row formatted as follows:

```csv
name,company,designation,content,rating,status
"Sarah Jenkins","TechCorp Inc.","Head of E-Commerce","Excellent integration and rapid checkout speeds!",5,1
"Michael Zhang","Nordic Store","Lead Merchant","Our conversions increased by 18% within 2 months.",5,1
```

---

## 🌐 Headless REST API Endpoints

All endpoints conform to Magento WebAPI standards.

### 1. Get Testimonials List
* **Endpoint:** `GET /V1/testimonials?searchCriteria[pageSize]=10`
* **Response:**
```json
{
  "items": [
    {
      "testimonials_id": 1,
      "name": "Sarah Jenkins",
      "company": "TechCorp Inc.",
      "designation": "Head of E-Commerce",
      "rating": 5,
      "content": "Excellent integration and rapid checkout speeds!",
      "status": 1,
      "created_at": "2026-01-10 12:00:00"
    }
  ],
  "total_count": 1
}
```

### 2. Get Testimonial by ID
* **Endpoint:** `GET /V1/testimonials/:id`

### 3. Create or Update Testimonial
* **Endpoint:** `POST /V1/testimonials`
* **Payload:**
```json
{
  "testimonials": {
    "name": "David Miller",
    "company": "Summit Retail",
    "designation": "CTO",
    "rating": 5,
    "content": "Flawless Magento implementation.",
    "status": 1
  }
}
```

### 4. Delete Testimonial
* **Endpoint:** `DELETE /V1/testimonials/:id`

---

## 🏗 Architecture & Code Structure

```
├── Api/
│   ├── Data/
│   │   ├── TestimonialsInterface.php
│   │   └── TestimonialsSearchResultsInterface.php
│   └── TestimonialsRepositoryInterface.php
├── Block/
│   └── Adminhtml/
├── Console/
│   └── Command/
│       └── ImportTestimonials.php
├── Controller/
│   └── Adminhtml/
├── Model/
│   ├── ResourceModel/
│   ├── Testimonials.php
│   ├── TestimonialsRepository.php
│   └── ImageUploader.php
├── Ui/
│   └── Component/Listing/
├── etc/
│   ├── adminhtml/
│   │   ├── menu.xml
│   │   └── routes.xml
│   ├── db_schema.xml
│   ├── di.xml
│   ├── module.xml
│   └── webapi.xml
├── samples/
│   └── testimonials.csv
├── view/
│   └── adminhtml/
│       ├── layout/
│       └── ui_component/priyank_testimonials_testimonials_listing.xml
├── composer.json
└── registration.php
```

---

## 📄 License

This project is open-source and released under the [MIT License](LICENSE).

---

## 💼 Developing a Magento 2 project?

I help businesses build, customize, optimize, and maintain **Magento 2 / Adobe Commerce** stores.

**Available for:**
* Magento 2 Custom Development & Architecture
* Custom Magento Extensions & Modules
* Bug Fixes, Audits, and Troubleshooting
* Performance Optimization & Core Web Vitals
* Hyvä Theme Development & Customization
* Headless GraphQL & REST API Integrations
* Ongoing Magento Store Maintenance

👉 **Hire me on Upwork:** [Priyank Jivani on Upwork](https://www.upwork.com/freelancers/priyankjivani)  
👉 **GitHub Profile:** [priyankjivani123](https://github.com/priyankjivani123)

Contact me for freelance projects and long-term enterprise collaborations.

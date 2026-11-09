# Magento 2 Customer Testimonials Extension

[![Magento 2.4.x](https://img.shields.io/badge/Magento-2.4.x-orange.svg?logo=magento)](https://business.adobe.com/products/magento/magento-commerce.html)
[![PHP 8.1 - 8.4 Compatible](https://img.shields.io/badge/PHP-8.1%20%7C%208.2%20%7C%208.3%20%7C%208.4-777BB4.svg?logo=php)](https://www.php.net/)
[![Composer Package](https://img.shields.io/badge/Composer-priyankjivani%2Fmodule--customer--testimonials-blue.svg?logo=composer)](https://packagist.org/)
[![License: MIT](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)
[![Upwork](https://img.shields.io/badge/Upwork-Available%20for%20Hire-14a800.svg?logo=upwork)](https://www.upwork.com/freelancers/priyankjivani)

Enterprise-grade Customer Testimonials module for **Magento 2 & Adobe Commerce**. Manage customer reviews, social proof, avatar images, company designations, and ratings with an Admin UI Grid, REST Web API endpoints, and a Symfony CLI CSV bulk importer.

Developed and maintained by **[Priyank Jivani](https://github.com/priyankjivani123)** (Senior Magento 2 Backend Developer).

---

## 🚀 Key Features

* **Admin UI Grid & Form:** Full CRUD interface under **Content > Testimonials** with image thumbnail previews, inline status switches, and mass delete.
* **REST Web API Endpoints:** Headless-ready endpoints (`/V1/testimonials`) supporting mobile applications and PWA storefronts.
* **CLI CSV Bulk Importer:** High-speed CSV bulk importer command (`bin/magento testimonials:import <file.csv>`) with validation.
* **Declarative Database Schema:** Clean `etc/db_schema.xml` definition with data patch lifecycle.
* **Strict PHP 8.1 - 8.4 Support:** Fully typed, interface-compliant return types (`OptionSourceInterface::toOptionArray(): array`).

---

## 🌐 Magento & PHP Compatibility Matrix

| Magento / Adobe Commerce Release | Supported PHP Versions | Compatibility Status | Notes |
| :--- | :--- | :---: | :--- |
| **Magento 2.4.4 - 2.4.5-p1** | PHP 8.1 | ✅ Supported | Tested on 2.4.4-p9 & 2.4.5-p1 |
| **Magento 2.4.5-p2 - 2.4.6-pX** | PHP 8.1, PHP 8.2 | ✅ Supported | Tested on 2.4.6-p8 |
| **Magento 2.4.7 - 2.4.7-pX** | PHP 8.2, PHP 8.3 | ✅ Supported | Officially verified on 2.4.7-p3 |
| **Magento 2.4.8 (Roadmap)** | PHP 8.3, PHP 8.4 | 🚀 Forward-Compatible | Strict types, zero implicit nullable deprecations |
| **PHP 8.5 (Future Release)** | *N/A (Pending Adobe Core)* | ⏳ Preview / Audited | Extension syntax passes PHP 8.5 compilation; awaiting Adobe Commerce core framework update |


---

## 📦 Composer Installation Instructions

### Step 1: Register GitHub VCS Repository
```bash
composer config repositories.priyankjivani-customer-testimonials vcs https://github.com/priyankjivani123/magento2-customer-testimonials.git
```

### Step 2: Require the Package
```bash
composer require priyankjivani/module-customer-testimonials:^1.0.0
```

### Step 3: Enable the Module
```bash
bin/magento module:enable PriyankJivani_CustomerTestimonials
bin/magento setup:upgrade
bin/magento setup:di:compile
bin/magento cache:flush
```

---

## 💻 CLI Bulk CSV Import

```bash
bin/magento testimonials:import sample_testimonials.csv
```
Expected CSV format:
```csv
name,company,designation,message,rating,status
"Sarah Jenkins","TechRetail Inc","VP of E-Commerce","Exceptional Magento store experience!",5,1
```

---

## 🧪 Automated Testing

```bash
vendor/bin/phpunit -c phpunit.xml.dist
```

---

## 📋 Changelog

See [CHANGELOG.md](CHANGELOG.md).

---

## 📄 License

MIT License. See [LICENSE](LICENSE).

---

## Developing a Magento 2 project?

I help businesses build, customize, optimize and maintain Magento 2 / Adobe Commerce stores.

**Available for:**
- Magento 2 Custom Development
- Magento Extensions
- Bug Fixes and Troubleshooting
- Performance Optimization
- Hyvä Theme Development
- API Integrations
- Ongoing Magento Maintenance

**Hire me on Upwork:** [Priyank Jivani Upwork Profile](https://www.upwork.com/freelancers/priyankjivani)  
**GitHub:** [github.com/priyankjivani123](https://github.com/priyankjivani123)

Contact me for freelance projects and long-term collaborations.


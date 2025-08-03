# FactuZen - Symfony Application

This is a Symfony application designed to manage clients, devis and invoices of a small business. It is ideal for learning Symfony structure, Doctrine ORM, and templating with Twig.

---

## 🛠️ Requirements

- PHP 8.2 or higher  
- Composer  
- MySQL

---

## 🚀 Installation

### Clone the repository and install dependencies
```bash
git clone https://github.com/Aline-Horn/factu-zen.git
cd factu_zen

```bash
composer install
```
This will install all necessary dependencies, including:
- Symfony 7.3
- Doctrine ORM
- Twig
- FakerPHP/Faker (used for generating test data)

---

## ⚙️ Database Configuration

The app uses MySQL by default. Create a `.env.local` file at the root of the project and configure your database connection:

```env
DATABASE_URL="mysql://username:password@127.0.0.1:3306/database_name?serverVersion=8.0.32&charset=utf8mb4"
```

Replace:
- `username` → your MySQL username
- `password` → your MySQL password
- `database_name` → the name of your database
- Adjust `serverVersion` if needed

You can copy the example file:

```bash
cp .env.local.example .env.local
```

Then edit it with your actual MySQL credentials.

---

## 🧱 Create the Database

After configuring the database, run the following commands:

```bash
php bin/console doctrine:database:create
php bin/console doctrine:schema:create
```

---

## 🧪 Load Fixtures (Test Data)

To generate sample clients using Faker:

```bash
php bin/console doctrine:fixtures:load
```

---

## ▶️ Start the Development Server

Using the built-in server:

```bash
php bin/console server:start
```

Or with Symfony CLI:

```bash
symfony server:start
```

---

## ✨ Features

✅ Display a list of all clients (`/clients`)

✅ View details of a specific client (`/clients/{id}`)

✅ Register new customers

✅ Check invoices



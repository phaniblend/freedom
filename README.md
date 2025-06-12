# 🚀 Freedom-BE: H1BConnect Backend API

## 📋 Overview

Freedom-BE is the backend API for **H1BConnect** - a revolutionary legal-tech platform that provides transparent, affordable H1B visa transfer services. This API powers a comprehensive immigration management system.

## 🌟 Key Features

- **Authentication & Authorization** - JWT-based secure authentication
- **Application Management** - H1B transfer application processing
- **Document Management** - Secure document upload and storage
- **Timesheet Tracking** - Work hour logging and compliance
- **Payment Processing** - Transparent pricing and payment handling
- **Savings Calculator** - ROI analysis vs traditional employer models
- **Advisor Booking** - Expert consultation scheduling
- **Compliance Tracking** - Immigration compliance monitoring
- **Analytics & Reports** - Comprehensive reporting dashboard

## 💰 Business Value

**Traditional Model**: Employers take 25% salary cuts (~$42,500/year on $170K salary)
**H1BConnect Model**: $3,500 setup + $500/month = **$33,000+ annual savings**

## 🛠 Tech Stack

- **Runtime**: Node.js + TypeScript
- **Framework**: Express.js
- **Database**: PostgreSQL (production) / Mock data (development)
- **Authentication**: JWT tokens
- **Logging**: Winston
- **Environment**: Development/Production configs

## 🚀 Quick Start

### Prerequisites
- Node.js 18+
- npm or yarn

### Installation

```bash
# Clone repository
git clone https://github.com/phaniblend/freedom-BE.git
cd freedom-BE

# Install dependencies
npm install

# Copy environment file
cp env.example .env

# Start development server
npm run dev
```

### Available Scripts

```bash
npm run dev          # Start development server with hot reload
npm run build        # Build TypeScript to JavaScript
npm start           # Start production server
npm run test        # Run tests
```

## 🌐 API Endpoints

### Authentication
- `POST /api/auth/register` - User registration
- `POST /api/auth/login` - User login
- `POST /api/auth/logout` - User logout

### Applications
- `GET /api/applications` - List user applications
- `POST /api/applications` - Create new application
- `GET /api/applications/:id` - Get application details
- `PUT /api/applications/:id` - Update application

### Documents
- `GET /api/documents` - List user documents
- `POST /api/documents/upload` - Upload document
- `DELETE /api/documents/:id` - Delete document

### Payments
- `GET /api/payments/overview` - Payment overview
- `GET /api/payments/transactions` - Transaction history
- `POST /api/payments/savings` - Calculate savings

### Advisors
- `GET /api/advisors` - List available advisors
- `POST /api/advisors/book` - Book consultation
- `GET /api/advisors/:id/availability` - Get advisor availability

### Compliance
- `GET /api/compliance/overview` - Compliance dashboard
- `GET /api/compliance/items` - Compliance checklist
- `GET /api/compliance/updates` - Regulatory updates

### Reports
- `GET /api/reports/overview` - Analytics overview
- `GET /api/reports/financial` - Financial reports
- `GET /api/reports/performance` - Performance metrics

## 🔧 Environment Variables

```env
# Server Configuration
NODE_ENV=development
PORT=5000
JWT_SECRET=your-super-secure-secret

# Database (Railway auto-provides in production)
DATABASE_URL=postgresql://...
DATABASE_PUBLIC_URL=postgresql://...

# Frontend URL
FRONTEND_URL=http://localhost:3001

# Optional: Email notifications
SMTP_HOST=smtp.gmail.com
SMTP_PORT=587
SMTP_USER=your-email@gmail.com
SMTP_PASS=your-app-password

# Optional: Payment processing
STRIPE_SECRET_KEY=sk_test_...
STRIPE_WEBHOOK_SECRET=whsec_...
```

## 🚢 Deployment

### Railway (Recommended)

1. **Connect Repository**: Link this repo to Railway
2. **Configure Service**: 
   - Build Command: `npm run build`
   - Start Command: `npm start`
3. **Set Environment Variables** (see DEPLOYMENT.md)
4. **Deploy**: Automatic deployment on git push

### Heroku

```bash
heroku create your-app-name
heroku addons:create heroku-postgresql:hobby-dev
git push heroku main
```

### Manual Server

```bash
# Build application
npm run build

# Start with PM2
pm2 start dist/index.js --name "freedom-be"
```

## 📁 Project Structure

```
freedom-BE/
├── src/
│   ├── config/          # Configuration files
│   ├── middleware/      # Express middlewares
│   ├── routes/          # API route handlers
│   ├── services/        # Business logic
│   ├── utils/           # Utility functions
│   └── index.ts         # Application entry point
├── dist/               # Compiled JavaScript (production)
├── logs/               # Application logs
├── railway.json        # Railway deployment config
├── Procfile           # Heroku deployment config
├── DEPLOYMENT.md      # Detailed deployment guide
└── package.json       # Dependencies and scripts
```

## 🔒 Security Features

- JWT authentication with secure token handling
- Environment-based configuration
- Request rate limiting
- CORS protection
- Input validation and sanitization
- Secure headers with Helmet.js

## 📊 Monitoring

- **Logging**: Winston logger with file and console outputs
- **Health Check**: `GET /health` endpoint
- **Environment Info**: Development/Production mode indicators

## 🤝 Contributing

1. Fork the repository
2. Create feature branch (`git checkout -b feature/amazing-feature`)
3. Commit changes (`git commit -m 'Add amazing feature'`)
4. Push to branch (`git push origin feature/amazing-feature`)
5. Open Pull Request

## 📄 License

This project is licensed under the MIT License.

## 🆘 Support

For deployment issues, see [DEPLOYMENT.md](./DEPLOYMENT.md)

For API documentation, start the server and visit `/health` for status.

---

**Built with ❤️ for immigrant freedom and transparency in H1B transfers** 
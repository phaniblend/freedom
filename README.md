# H1BConnect - H1B Transfer & Compliance Portal

A comprehensive legal-tech platform that revolutionizes the H-1B sponsorship process by providing transparent employer-of-record services without traditional exploitative cuts.

![H1BConnect](https://img.shields.io/badge/Status-In%20Development-yellow)
![License](https://img.shields.io/badge/License-MIT-blue)
![TypeScript](https://img.shields.io/badge/TypeScript-5.2+-blue)
![React](https://img.shields.io/badge/React-18.2+-blue)
![Node.js](https://img.shields.io/badge/Node.js-18.0+-green)

## 🚀 Value Proposition

**"We pay for your H-1B legal and filing fees, and you just pay a one-time setup fee of $3,500 and $500/month for full payroll and compliance."**

- ✅ **No percentage cut** of your hourly rate
- ✅ **Full transparency** and control
- ✅ **Legal compliance** guaranteed
- ✅ **Save $33,000+ annually** compared to traditional consulting firms

## 📊 Cost Comparison

| Criteria | Traditional Consulting (25% Cut) | H1BConnect Model |
|----------|----------------------------------|------------------|
| Annual Billable Hours | 2,000 | 2,000 |
| Gross Billed Amount | $170,000 | $170,000 |
| Employer Cut | $42,500 (25%) | $0 |
| Setup Fee | $0 | $3,500 |
| Monthly Fee | $0 | $6,000/year |
| **Net Payout** | **$127,500** | **$160,500** |
| **Annual Savings** | - | **$33,000** |

## 🔧 Tech Stack

### Backend
- **Runtime**: Node.js with TypeScript
- **Framework**: Express.js
- **Database**: PostgreSQL with TypeORM
- **Authentication**: JWT with refresh tokens
- **Payment**: Stripe integration
- **File Storage**: AWS S3
- **Email**: Nodemailer
- **Logging**: Winston

### Frontend
- **Framework**: React 18 with TypeScript
- **Build Tool**: Vite
- **Styling**: Tailwind CSS
- **Routing**: React Router v6
- **State Management**: Zustand + React Query
- **Forms**: React Hook Form
- **UI Components**: Custom + Lucide React icons
- **Animations**: Framer Motion

### DevOps & Hosting
- **Frontend**: Vercel (recommended)
- **Backend**: Railway, Render, or AWS
- **Database**: Railway PostgreSQL, Supabase, or AWS RDS
- **File Storage**: AWS S3 or Cloudinary

## 🏗️ Project Structure

```
h1bconnect/
├── client/                 # React frontend
│   ├── src/
│   │   ├── components/    # Reusable UI components
│   │   ├── pages/         # Page components
│   │   ├── hooks/         # Custom React hooks
│   │   ├── services/      # API calls
│   │   ├── store/         # State management
│   │   ├── types/         # TypeScript types
│   │   └── utils/         # Utility functions
│   ├── public/            # Static assets
│   └── package.json
├── server/                # Node.js backend
│   ├── src/
│   │   ├── controllers/   # Route handlers
│   │   ├── entities/      # Database models
│   │   ├── middleware/    # Express middleware
│   │   ├── routes/        # API routes
│   │   ├── services/      # Business logic
│   │   ├── utils/         # Utility functions
│   │   └── config/        # Configuration
│   └── package.json
├── proj_docs/             # Documentation
└── README.md
```

## 🚀 Quick Start

### Prerequisites
- Node.js 18.0+
- PostgreSQL 14+
- npm or yarn

### 1. Clone the Repository
```bash
git clone https://github.com/yourusername/h1bconnect.git
cd h1bconnect
```

### 2. Install Dependencies
```bash
# Install root dependencies
npm install

# Install all dependencies (client + server)
npm run install:all
```

### 3. Environment Setup

#### Server Environment
Copy `server/env.example` to `server/.env` and configure:

```env
# Database
DB_HOST=localhost
DB_PORT=5432
DB_USERNAME=postgres
DB_PASSWORD=your_password
DB_NAME=h1bconnect

# JWT
JWT_SECRET=your-super-secret-jwt-key-here
JWT_EXPIRES_IN=7d

# Stripe
STRIPE_SECRET_KEY=sk_test_your_stripe_secret_key
STRIPE_PUBLISHABLE_KEY=pk_test_your_publishable_key

# Email (Gmail)
EMAIL_USER=your-email@gmail.com
EMAIL_PASS=your-app-password

# AWS S3
AWS_ACCESS_KEY_ID=your_aws_access_key
AWS_SECRET_ACCESS_KEY=your_aws_secret_key
AWS_S3_BUCKET_NAME=h1bconnect-documents
```

#### Client Environment
Create `client/.env`:

```env
VITE_API_URL=http://localhost:5000/api
VITE_STRIPE_PUBLISHABLE_KEY=pk_test_your_publishable_key
```

### 4. Database Setup
```bash
# Start PostgreSQL and create database
createdb h1bconnect

# Run database migrations (when implemented)
cd server && npm run migration:run
```

### 5. Start Development Servers
```bash
# Start both client and server concurrently
npm run dev

# Or start separately:
npm run dev:client  # Frontend on http://localhost:3000
npm run dev:server  # Backend on http://localhost:5000
```

## 🔑 Core Features

### 1. **Advisor Appointment Booking**
- Calendar integration for legal consultations
- Automated scheduling and reminders

### 2. **Savings Calculator**
- Real-time comparison with traditional consulting firms
- ROI calculator for potential clients

### 3. **Application Management**
- H1B transfer application tracking
- Document requirements checklist
- Status updates and notifications

### 4. **Document Management**
- Secure file upload with AWS S3
- Document validation and approval workflow
- Automated reminders for expiring documents

### 5. **Timesheet & Billing**
- Weekly timesheet submission
- Automated invoicing to clients
- Payment tracking and reconciliation

### 6. **Payment Processing**
- Stripe integration for registration fees
- Subscription management for monthly fees
- Payment history and receipts

### 7. **Compliance Tracking**
- Visa status monitoring
- State registration compliance
- Tax filing coordination

### 8. **Client & Vendor Management**
- MSA and contract management
- Client introduction workflow
- Vendor onboarding

## 🚀 Deployment Options

### Option 1: Vercel + Railway (Recommended)

#### Frontend (Vercel)
```bash
# Install Vercel CLI
npm i -g vercel

# Deploy from client directory
cd client
vercel --prod
```

#### Backend (Railway)
1. Connect GitHub repository to Railway
2. Set environment variables in Railway dashboard
3. Deploy automatically on push

### Option 2: AWS Full Stack

#### Frontend (S3 + CloudFront)
```bash
# Build and deploy
cd client
npm run build
aws s3 sync dist/ s3://your-bucket-name
```

#### Backend (Elastic Beanstalk or EC2)
```bash
# Build and deploy
cd server
npm run build
# Deploy to AWS Elastic Beanstalk
```

### Option 3: Render (Full Stack)

#### Backend
1. Connect GitHub repo to Render
2. Set environment variables
3. Deploy with build command: `cd server && npm install && npm run build`
4. Start command: `cd server && npm start`

#### Frontend
1. Create static site on Render
2. Build command: `cd client && npm install && npm run build`
3. Publish directory: `client/dist`

## 🔐 Security Features

- **JWT Authentication** with refresh tokens
- **Rate limiting** to prevent abuse
- **Input validation** with Joi
- **SQL injection protection** with TypeORM
- **File upload restrictions** and validation
- **CORS protection**
- **Helmet security headers**
- **Environment variable protection**

## 📈 Monetization Strategy

### Core Revenue Streams
1. **Registration Fee**: $3,500 one-time
2. **Monthly EOR Fee**: $500/month
3. **Premium Processing**: $999 one-time
4. **Legal Subscription**: $50-100/month
5. **Tax Prep Partnership**: $150-200/user

### Add-on Services
- Health insurance administration
- 401(k) management (0.5% of assets)
- Green card processing
- Emergency legal hotline
- State compliance tracking

## 🤝 Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 🆘 Support

For support and questions:
- 📧 Email: support@h1bconnect.com
- 💬 Discord: [H1BConnect Community](https://discord.gg/h1bconnect)
- 📚 Documentation: [docs.h1bconnect.com](https://docs.h1bconnect.com)

## 🗺️ Roadmap

### Phase 1 (MVP) - Q1 2024
- [x] User authentication and registration
- [x] Basic application management
- [x] Document upload functionality
- [x] Payment integration
- [ ] Advisor booking system

### Phase 2 - Q2 2024
- [ ] Advanced compliance tracking
- [ ] Mobile app companion
- [ ] AI document validation
- [ ] Multi-user dashboard for staffing firms

### Phase 3 - Q3 2024
- [ ] Green card processing module
- [ ] Advanced analytics dashboard
- [ ] API for third-party integrations
- [ ] White-label solutions

---

**Built with ❤️ for the H1B community**

*Empowering skilled professionals to retain their full earning potential while ensuring complete legal compliance.* 
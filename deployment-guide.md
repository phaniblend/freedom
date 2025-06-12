# Capital Recruiters + H1BConnect Integration Deployment Guide

## Overview
This guide helps you deploy the H1BConnect platform and integrate it with your existing Capital Recruiters website.

## Step 1: Deploy H1BConnect Backend to Railway

1. **Create Railway Account**: Sign up at [railway.app](https://railway.app)

2. **Deploy Backend**:
   - Connect your GitHub repository to Railway
   - Create a new project from the `server` directory
   - Set environment variables:
     ```
     NODE_ENV=production
     DATABASE_URL=postgresql://postgres:IgBeLjqjyRXyPfHrHyeMVRIQvXAojuXy@postgres.railway.internal:5432/railway
     DATABASE_PUBLIC_URL=postgresql://postgres:IgBeLjqjyRXyPfHrHyeMVRIQvXAojuXy@mainline.proxy.rlwy.net:40820/railway
     JWT_SECRET=your-jwt-secret-here
     PORT=5000
     ```
   - Railway will provide a URL like: `https://freedom-be-production.up.railway.app/api/auth/register`

## Step 2: Deploy H1BConnect Frontend to Railway

1. **Create Frontend Service**:
   - Create another Railway service from the `client` directory
   - Set environment variables:
     ```
     NODE_ENV=production
     VITE_API_URL=https://freedom-be-production.up.railway.app/api/auth/register/api
     ```
   - Railway will provide a URL like: `https://h1bconnect-frontend-production.up.railway.app`

## Step 3: Update Capital Recruiters Website

The Capital Recruiters website has been updated to include a "Freedom" menu item that redirects to your H1BConnect platform.

### Changes Made:

1. **Menu Addition** (`data.php`):
   ```php
   $menus = [
     "#home" => "Home",
     "#about-us" => "About Us", 
     "#services" => "Services",
     "#specialisation" => "Specialisation",
     "#jobs" => "Job Postings",
     "https://h1bconnect-frontend-production.up.railway.app" => "Freedom",
     "#contact" => "Contact",
   ];
   ```

2. **Navigation Update** (`index.php`):
   - Freedom link opens in new tab with `target="_blank"`
   - Added security attributes `rel="noopener noreferrer"`

## Step 4: Update URLs with Actual Railway Deployments

After deploying to Railway, update these files with your actual URLs:

1. **Capital Recruiters** (`capitalrecruiters.net/capitalrecruiters.net/data.php`):
   - Replace placeholder URL with actual Railway frontend URL

2. **H1BConnect Auth Store** (`client/src/store/authStore.ts`):
   - Replace placeholder URL with actual Railway backend URL

## Step 5: Deploy Capital Recruiters Updates

1. Upload the updated `data.php` and `index.php` files to your GoDaddy hosting
2. The Freedom menu item will now appear and redirect users to H1BConnect

## Step 6: Test the Integration

1. Visit capitalrecruiters.net
2. Click on "Freedom" in the navigation menu
3. Verify it opens H1BConnect in a new tab
4. Test user registration and login functionality

## Benefits of This Integration

- **SEO**: Leverage Capital Recruiters domain authority
- **User Flow**: Seamless transition from recruiting services to visa services
- **Brand Synergy**: Present both services under the Capital Recruiters umbrella
- **Cost Effective**: Use modern hosting for the app while keeping existing website

## Database Configuration Notes

Your Railway PostgreSQL database has two connection URLs:

- **DATABASE_URL** (Internal): `postgresql://postgres:IgBeLjqjyRXyPfHrHyeMVRIQvXAojuXy@postgres.railway.internal:5432/railway`
  - Use this for Railway-to-Railway connections (backend connecting to database)
  
- **DATABASE_PUBLIC_URL** (External): `postgresql://postgres:IgBeLjqjyRXyPfHrHyeMVRIQvXAojuXy@mainline.proxy.rlwy.net:40820/railway`
  - Use this for external connections (development, database management tools)

## Railway URLs (Update These)

Replace these placeholder URLs with your actual Railway deployment URLs:

- **Backend**: `https://freedom-be-production.up.railway.app/api/auth/register`
- **Frontend**: `https://h1bconnect-frontend-production.up.railway.app`

You can find these URLs in your Railway dashboard after deployment. 
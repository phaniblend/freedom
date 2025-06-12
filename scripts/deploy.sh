#!/bin/bash

# H1BConnect Production Deployment Script
set -e

echo "🚀 Starting H1BConnect Production Deployment..."

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m' # No Color

# Check if we're in the right directory
if [ ! -f "package.json" ]; then
    echo -e "${RED}❌ Error: Please run this script from the project root directory${NC}"
    exit 1
fi

# Check for required tools
echo -e "${BLUE}🔍 Checking required tools...${NC}"
command -v node >/dev/null 2>&1 || { echo -e "${RED}❌ Node.js is required but not installed.${NC}" >&2; exit 1; }
command -v npm >/dev/null 2>&1 || { echo -e "${RED}❌ npm is required but not installed.${NC}" >&2; exit 1; }

echo -e "${GREEN}✅ All required tools are available${NC}"

# Install dependencies
echo -e "${BLUE}📦 Installing root dependencies...${NC}"
npm install

# Build backend
echo -e "${BLUE}🏗️  Building backend...${NC}"
cd server
npm install
npm run build
echo -e "${GREEN}✅ Backend build completed${NC}"
cd ..

# Build frontend
echo -e "${BLUE}🏗️  Building frontend...${NC}"
cd client
npm install

# Set production environment variables for build
export NODE_ENV=production
export VITE_API_URL=${VITE_API_URL:-"https://h1bconnect-backend-production.up.railway.app/api"}
export VITE_APP_NAME="H1BConnect"
export VITE_APP_VERSION="1.0.0"
export VITE_APP_ENVIRONMENT="production"

npm run build
echo -e "${GREEN}✅ Frontend build completed${NC}"
cd ..

# Run basic tests
echo -e "${BLUE}🧪 Running basic health checks...${NC}"

# Check if backend build exists
if [ ! -d "server/dist" ]; then
    echo -e "${RED}❌ Backend build failed - dist directory not found${NC}"
    exit 1
fi

# Check if frontend build exists
if [ ! -d "client/dist" ]; then
    echo -e "${RED}❌ Frontend build failed - dist directory not found${NC}"
    exit 1
fi

echo -e "${GREEN}✅ All builds completed successfully${NC}"

# Display deployment options
echo -e "${YELLOW}📋 Deployment Options:${NC}"
echo ""
echo -e "${BLUE}1. Railway Deployment (Recommended):${NC}"
echo "   - Ensure your Railway project is connected to this repository"
echo "   - Push to main branch: git push origin main"
echo "   - Railway will automatically deploy from railway.json config"
echo ""
echo -e "${BLUE}2. Vercel Frontend + Railway Backend:${NC}"
echo "   - Backend: Deploy to Railway as above"
echo "   - Frontend: Run 'npx vercel --prod' from project root"
echo ""
echo -e "${BLUE}3. Manual Deployment:${NC}"
echo "   - Backend files ready in: server/dist/"
echo "   - Frontend files ready in: client/dist/"
echo ""

# Display environment variables needed
echo -e "${YELLOW}🔧 Required Environment Variables for Production:${NC}"
echo ""
echo -e "${BLUE}Backend (Railway):${NC}"
echo "NODE_ENV=production"
echo "JWT_SECRET=your-jwt-secret-here"
echo "FRONTEND_URL=https://your-frontend-domain.com"
echo "DATABASE_URL=postgresql://..."
echo ""
echo -e "${BLUE}Frontend (Auto-set in build):${NC}"
echo "VITE_API_URL=https://your-backend-domain.com/api"
echo "VITE_APP_NAME=H1BConnect"
echo "VITE_APP_VERSION=1.0.0"
echo ""

echo -e "${GREEN}🎉 Deployment preparation completed!${NC}"
echo -e "${YELLOW}💡 Next steps:${NC}"
echo "1. Set up your production environment variables"
echo "2. Choose your deployment method above"
echo "3. Monitor deployment logs for any issues"
echo "4. Test the production deployment thoroughly" 
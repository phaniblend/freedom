#!/bin/bash

# H1BConnect Setup Script
# This script helps you set up the H1BConnect application

echo "🚀 H1BConnect Setup Script"
echo "=========================="

# Check if Node.js is installed
if ! command -v node &> /dev/null; then
    echo "❌ Node.js is not installed. Please install Node.js 18.0+ first."
    echo "   Visit: https://nodejs.org/"
    exit 1
fi

# Check Node.js version
NODE_VERSION=$(node -v | cut -d 'v' -f 2)
REQUIRED_VERSION="18.0.0"

if [ "$(printf '%s\n' "$REQUIRED_VERSION" "$NODE_VERSION" | sort -V | head -n1)" != "$REQUIRED_VERSION" ]; then
    echo "❌ Node.js version $NODE_VERSION is too old. Please upgrade to 18.0+"
    exit 1
fi

echo "✅ Node.js version: $NODE_VERSION"

# Check if PostgreSQL is available
if ! command -v psql &> /dev/null; then
    echo "⚠️  PostgreSQL not found locally."
    echo "   You can:"
    echo "   1. Install PostgreSQL locally"
    echo "   2. Use a cloud database (Railway, Supabase, etc.)"
    echo "   3. Continue setup and configure database later"
    read -p "Continue anyway? (y/n): " -n 1 -r
    echo
    if [[ ! $REPLY =~ ^[Yy]$ ]]; then
        exit 1
    fi
else
    echo "✅ PostgreSQL found"
fi

# Create directories if they don't exist
echo "📁 Creating project structure..."
mkdir -p server/src/{controllers,entities,middleware,routes,services,utils,config}
mkdir -p server/logs
mkdir -p client/src/{components,pages,hooks,services,store,types,utils}
mkdir -p client/public

# Install dependencies
echo "📦 Installing dependencies..."

# Root dependencies
npm install

# Server dependencies
echo "Installing server dependencies..."
cd server && npm install
if [ $? -ne 0 ]; then
    echo "❌ Failed to install server dependencies"
    exit 1
fi

# Client dependencies
echo "Installing client dependencies..."
cd ../client && npm install
if [ $? -ne 0 ]; then
    echo "❌ Failed to install client dependencies"
    exit 1
fi

cd ..

# Create environment files
echo "⚙️  Creating environment files..."

# Server environment
if [ ! -f "server/.env" ]; then
    cp server/env.example server/.env
    echo "✅ Created server/.env from template"
    echo "   Please edit server/.env with your configuration"
else
    echo "✅ server/.env already exists"
fi

# Client environment
if [ ! -f "client/.env" ]; then
    cat > client/.env << EOL
VITE_API_URL=http://localhost:5000/api
VITE_STRIPE_PUBLISHABLE_KEY=pk_test_your_publishable_key
EOL
    echo "✅ Created client/.env"
else
    echo "✅ client/.env already exists"
fi

# Create database (if PostgreSQL is available)
if command -v createdb &> /dev/null; then
    echo "🗃️  Creating database..."
    createdb h1bconnect 2>/dev/null && echo "✅ Database 'h1bconnect' created" || echo "⚠️  Database might already exist"
fi

# Create .gitignore if it doesn't exist
if [ ! -f ".gitignore" ]; then
    cat > .gitignore << EOL
# Dependencies
node_modules/
*/node_modules/

# Environment files
.env
.env.local
.env.development.local
.env.test.local
.env.production.local

# Build outputs
dist/
build/
*.tsbuildinfo

# Logs
logs/
*.log
npm-debug.log*
yarn-debug.log*
yarn-error.log*

# Runtime data
pids/
*.pid
*.seed
*.pid.lock

# Coverage directory used by tools like istanbul
coverage/
*.lcov

# nyc test coverage
.nyc_output

# OS generated files
.DS_Store
.DS_Store?
._*
.Spotlight-V100
.Trashes
ehthumbs.db
Thumbs.db

# IDE files
.vscode/
.idea/
*.swp
*.swo

# Temporary files
*.tmp
*.temp

# Database
*.sqlite
*.db
EOL
    echo "✅ Created .gitignore"
fi

echo ""
echo "🎉 Setup complete!"
echo ""
echo "Next steps:"
echo "1. Edit server/.env with your database and API keys"
echo "2. Edit client/.env with your configuration"
echo "3. Start development: npm run dev"
echo ""
echo "For deployment options, see README.md"
echo ""
echo "Happy coding! 🚀" 
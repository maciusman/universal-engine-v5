#!/bin/bash
# A script to finalize the theme setup.
echo "--- Starting Theme Setup for: Universal Engine V5 ---"
echo "1/2: Installing npm dependencies..."
npm install
echo "2/2: Building assets for production..."
npm run build
echo "--- Setup Complete! Your theme is now ready. ---"
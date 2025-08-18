# Calculator App

A modern calculator application built with the latest Next.js 15.4.6, React 19, and Tailwind CSS.

## Features

- ✨ Modern, responsive design with Tailwind CSS
- 🧮 Basic arithmetic operations (addition, subtraction, multiplication, division)
- 🔢 Decimal number support
- 🎯 Clean and intuitive user interface
- ⚡ Built with Next.js 15 and React 19 for optimal performance
- 📱 Mobile-friendly responsive design

## Technologies Used

- **Next.js 15.4.6** - Latest version of the React framework
- **React 19** - Latest version of React
- **TypeScript** - Type safety and better development experience
- **Tailwind CSS v4** - Modern utility-first CSS framework

## Getting Started

### Prerequisites

- Node.js 18+ (recommended: Node.js 20+)
- npm or yarn

### Installation

1. Clone the repository:
   ```bash
   git clone <repository-url>
   cd test
   ```

2. Install dependencies:
   ```bash
   npm install
   ```

3. Run the development server:
   ```bash
   npm run dev
   ```

4. Open [http://localhost:3000](http://localhost:3000) in your browser to see the calculator.

### Building for Production

To create a production build:

```bash
npm run build
npm start
```

## Usage

The calculator supports:
- Basic arithmetic operations (+, -, ×, ÷)
- Decimal numbers
- Clear function to reset calculations
- Immediate calculation display

Simply click the buttons to perform calculations, or use the clear button to reset.

## Project Structure

```
├── app/
│   ├── globals.css      # Global styles
│   ├── layout.tsx       # Root layout
│   └── page.tsx         # Calculator component
├── public/              # Static assets
├── package.json         # Dependencies and scripts
└── README.md           # This file
```

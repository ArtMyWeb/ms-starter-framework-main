/** @type {import('tailwindcss').Config} */
module.exports = {
  mode: 'jit',
  content: [
    "./**/*.php",
    "./_templates/**/*.php",
    "./_inc/**/*.php",
    "./_src/js/**/*.js",
    "./shortcode.js"
  ],
  theme: {
    screens: {
      sm: '641px',
      md: '769px',
      lg: '1025px',
      xl: '1400px',
      '3xl': '1440px',
      '4xl': '1800px',
    },
    extend: {
      margin: {
        'container-top': 'var(--container-top-padding)',
        'container-bottom': 'var(--container-bottom-padding)',
        'container-left': 'var(--container-left-padding)',
        'container-right': 'var(--container-right-padding)',
        'container-sm-top': 'var(--container-sm-top-padding)',
        'container-sm-bottom': 'var(--container-sm-bottom-padding)',
        'container-sm-left': 'var(--container-sm-left-padding)',
        'container-sm-right': 'var(--container-sm-right-padding)',
        'container-md-top': 'var(--container-md-top-padding)',
        'container-md-bottom': 'var(--container-md-bottom-padding)',
        'container-md-left': 'var(--container-md-left-padding)',
        'container-md-right': 'var(--container-md-right-padding)',
        'side-offset': 'var(--side-offset)',
      },
      padding: {
        'container-top': 'var(--container-top-padding)',
        'container-bottom': 'var(--container-bottom-padding)',
        'container-left': 'var(--container-left-padding)',
        'container-right': 'var(--container-right-padding)',
        'container-sm-top': 'var(--container-sm-top-padding)',
        'container-sm-bottom': 'var(--container-sm-bottom-padding)',
        'container-sm-left': 'var(--container-sm-left-padding)',
        'container-sm-right': 'var(--container-sm-right-padding)',
        'container-lg-top': 'var(--container-lg-top-padding)',
        'container-lg-bottom': 'var(--container-lg-bottom-padding)',
        'container-lg-left': 'var(--container-lg-left-padding)',
        'container-lg-right': 'var(--container-lg-right-padding)',
        'container-xl-left': 'var(--container-xl-left-padding)',
        'container-xl-right': 'var(--container-xl-right-padding)',
        'container-xxl-left': 'var(--container-xxl-left-padding)',
        'container-xxl-right': 'var(--container-xxl-right-padding)',
        'side-offset': 'var(--side-offset)',
      },
      colors: {
        // Додайте свої кольори тут
        primary: {
          50: '#eff6ff',
          100: '#dbeafe',
          200: '#bfdbfe',
          300: '#93c5fd',
          400: '#60a5fa',
          500: '#3b82f6',
          600: '#2563eb',
          700: '#1d4ed8',
          800: '#1e40af',
          900: '#1e3a8a',
        },
        'gold': '#FFA122',
        'blue': '#072543',
        'dark-blue': '#003B5E',
        'text-color': '#3B3B3B',
      },
      fontFamily: {
        // Додайте свої шрифти тут
        'sans': ['Inter', 'system-ui', 'sans-serif'],
        'typekit': ['utopia-std', 'serif'],
        'utopia': ['utopia-std', 'serif'],
      },
      spacing: {
        // Додайте свої розміри тут
        '72': '18rem',
        '84': '21rem',
        '96': '24rem',
      }
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}
import forms from '@tailwindcss/forms';
export default {
  darkMode: 'class',
  content: ['./resources/**/*.blade.php', './resources/**/*.js', './app/**/*.php'],
  theme: {
    extend: {
      fontFamily: {
        display: ['Syne', 'sans-serif'],
        sans: ['DM Sans', 'sans-serif'],
      },
      colors: {
        ink: '#080c18',
        panel: '#131b2e',
        panel2: '#1a2440',
        brand: '#5b6af0',
        violetx: '#7c3aed',
        neon: '#00e5ff',
        gold: '#f59e0b',
      },
      boxShadow: { glow: '0 4px 32px rgba(91,106,240,.18)' },
      borderRadius: { xl2: '20px' }
    },
  },
  plugins: [forms],
};

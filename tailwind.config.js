/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    // Include everything except node_modules
    './**/!(node_modules)/**/*.{html,js,php}',
    // Include root level files
    './*.{html,js,php}'
  ],
  theme: {
    extend: {
      colors: {
        'primary': {
          DEFAULT: 'var(--color-primary)',
          80: 'var(--color-primary-80)',
          60: 'var(--color-primary-60)',
          40: 'var(--color-primary-40)',
          20: 'var(--color-primary-20)',
          10: 'var(--color-primary-10)',
          5: 'var(--color-primary-5)',
        }
      },
      fontSize: {
        'headingCustom': ['2.4rem', '3rem'],
        'headingCustomSmall': ['2.1rem', '2.5rem'],
        'mediumFont': ['0.80rem', '1.3rem'],
        'smallFont': ['0.6rem', '1rem']
      },
      screens: {
        md: '950px',
        customMd: '830px',
        customLg: '1080px'
      },
      maxWidth: {
        'customMax': '103rem'
      },
      backgroundImage: {
        'button-gradient': 'var(--button-gradient)',
        'text-gradient': 'var(--text-gradient)',
      },
    }
  },
  variants: {
    extend: {
      fontSize: ['responsive', 'important'],
    }
  },
  plugins: [],
}
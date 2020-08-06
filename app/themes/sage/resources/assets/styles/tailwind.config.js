module.exports = {
  prefix: '',
  important: false,
  separator: ':',
  theme: {
    screens: {
      sm: '768px',
      md: '1024px',
      lg: '1336px',
      xl: '1920px'
    },
    colors: {
      transparent: 'transparent',

      black: '#000',
      white: '#fff',

      gray: {
        100: '#e7e9e6',
        200: '#edf2f7',
        300: '#e2e8f0',
        400: '#cbd5e0',
        500: '#a0aec0',
        600: '#718096',
        700: '#4a5568',
        800: '#2d3748',
        900: '#323232'
      },
      red: {
        100: '#fff5f5',
        200: '#fed7d7',
        300: '#feb2b2',
        400: '#fc8181',
        500: '#f56565',
        600: '#e53e3e',
        700: '#c53030',
        800: '#9b2c2c',
        900: '#742a2a'
      },
      yellow: {
        100: '#fffff0',
        200: '#fefcbf',
        300: '#faf089',
        400: '#f6e05e',
        500: '#ecc94b',
        600: '#d69e2e',
        700: '#b7791f',
        800: '#975a16',
        900: '#744210'
      },
      green: {
        100: '#f0fff4',
        200: '#c6f6d5',
        300: '#9ae6b4',
        400: '#68d391',
        500: '#48bb78',
        600: '#38a169',
        700: '#2f855a',
        800: '#276749',
        900: '#22543d'
      },
      blue: {
        100: '#ebf8ff',
        200: '#bee3f8',
        300: '#90cdf4',
        400: '#63b3ed',
        500: '#4299e1',
        600: '#3182ce',
        700: '#2b6cb0',
        800: '#2c5282',
        900: '#2a4365'
      },
      primary: {
        1: '#e77c37',
        2: '#3A3A3A',
        3: '#3A3A3A',
        4: '#F5F5F5',
        5: '#D8D8D8',

      }
    },
    spacing: {
      px: '1px',
      '0': '0',
      '1': '0.25rem',
      '2': '0.5rem',
      '3': '0.75rem',
      '4': '1rem',
      '5': '1.25rem',
      '6': '1.5rem',
      '8': '2rem',
      '10': '2.5rem',
      '12': '3rem',
      '16': '4rem',
      '20': '5rem',
      '24': '6rem',
      '32': '8rem',
      '40': '10rem',
      '48': '12rem',
      '56': '14rem',
      '64': '16rem',
      '15': '15px',
      '30': '30px',
      '45': '45px',
      '60': '60px',
      '75': '75px',
      '90': '90px',
      '105': '105px',
      '120': '120px',
      '135': '135px',
      '150': '150px',
      buffer: '0.9375rem'
    },
    backgroundColor: theme => theme('colors'),
    backgroundPosition: {
      bottom: 'bottom',
      center: 'center',
      left: 'left',
      'left-bottom': 'left bottom',
      'left-top': 'left top',
      right: 'right',
      'right-bottom': 'right bottom',
      'right-top': 'right top',
      top: 'top'
    },
    backgroundSize: {
      auto: 'auto',
      cover: 'cover',
      contain: 'contain'
    },
    borderColor: theme => ({
      ...theme('colors'),
      default: theme('colors.gray.300', 'currentColor')
    }),
    borderRadius: {
      none: '0',
      sm: '0.125rem',
      default: '0.25rem',
      lg: '0.5rem',
      full: '9999px'
    },
    borderWidth: {
      default: '1px',
      '0': '0',
      '1': '1px',
      '2': '2px',
      '4': '4px',
      '8': '8px'
    },
    boxShadow: {
      default:
      '0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06)',
      md:
      '0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)',
      lg:
      '0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)',
      xl:
      '0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)',
      '2xl': '0 25px 50px -12px rgba(0, 0, 0, 0.25)',
      inner: 'inset 0 2px 4px 0 rgba(0, 0, 0, 0.06)',
      outline: '0 0 0 3px rgba(66, 153, 225, 0.5)',
      none: 'none'
    },
    container: {},
    cursor: {
      auto: 'auto',
      default: 'default',
      pointer: 'pointer',
      wait: 'wait',
      text: 'text',
      move: 'move',
      'not-allowed': 'not-allowed'
    },
    fill: {
      current: 'currentColor',
      white: '#ffffff'
    },
    flex: {
      '1': '1 1 0%',
      auto: '1 1 auto',
      initial: '0 1 auto',
      none: 'none'
    },
    flexGrow: {
      '0': '0',
      default: '1'
    },
    flexShrink: {
      '0': '0',
      default: '1'
    },
    fontFamily: {
      'fontawesome-regular': [
        'Font Awesome\\ 5 Pro Regular'
      ],
      'fontawesome-solid': [
        'Font Awesome\\ 5 Pro Solid'
      ],

      'raleway-black': [
        'raleway-black'
      ],
      'raleway-bold': [
        'raleway-bold'
      ],
      'raleway-italic': [
        'raleway-italic'
      ],
      'raleway-regular': [
        'raleway-regular'
      ],

      sans: [
        '-apple-system',
        'BlinkMacSystemFont',
        'Segoe UI',
        'Roboto',
        'Helvetica Neue',
        'Arial',
        'Noto Sans',
        'sans-serif',
        'Apple Color Emoji',
        'Segoe UI Emoji',
        'Segoe UI Symbol',
        'Noto Color Emoji'
      ],
      serif: ['Georgia', 'Cambria', 'Times New Roman', 'Times', 'serif'],
      'roboto-regular': [
        'roboto-regular',
        'Helvetica Neue',
        'Arial',
        'Noto Sans',
        'sans-serif'
      ],
      'trade-gothic-lt-bold': [
        'trade-gothic-lt-bold',
        'Helvetica Neue',
        'Arial',
        'Noto Sans',
        'sans-serif'
      ],
      'trade-gothic-lt': [
        'trade-gothic-lt',
        'Helvetica Neue',
        'Arial',
        'Noto Sans',
        'sans-serif'
      ]
    },
    fontSize: {
      drop: '24px',
      drop: '24px',

      h1_hero: '70px',
      h1_hero_m: '46px',

      h1: '40px',
      h1_m: '40px',

      h2: '38px',

      h3: '36px',
      h3_m: '36px',

      h4: '34px',
      h5: '30px',
      h6: '25px',

      p: '23px',
      p_m: '23px',

      small: '18px',
      hero_p: '40px',

      xs: '1rem',
      sm: '1.125rem',
      base: '1.25rem',
      lg: '1.25rem',
      xl: '18px',
      '2xl': '1.75rem',
      '3xl': '2rem',
      '4xl': '3rem',
      '5xl': '2.5rem',
      'md:5xl': '3.375rem'
    },
    fontWeight: {
      hairline: '100',
      thin: '200',
      light: '300',
      normal: '400',
      medium: '500',
      semibold: '600',
      bold: '700',
      extrabold: '800',
      black: '900'
    },
    height: theme => ({
      auto: 'auto',
      ...theme('spacing'),
      full: '100%',
      screen: '100vh',
      hero: '775px',
      hero_mobile: '360px',
      hero_secondary: '400px',
      hero_secondary_mobile: '300px',
      icon: '20px',
      dot: '15px',
      hamburger: '4px'
    }),
    inset: {
      '0': '0',
      auto: 'auto',
      buffer: '-15px',
      '100': '100%',
      sticky: '15px',
      half: '50%',
      'slick-arrow': '15px'
    },
    letterSpacing: {
      tighter: '-0.05em',
      tight: '-0.025em',
      normal: '0',
      wide: '0.025em',
      wider: '0.05em',
      widest: '0.1em'
    },
    lineHeight: {
      none: '1',
      tight: '1.25',
      snug: '1.375',
      normal: '1.5',
      relaxed: '1.625',
      loose: '2'
    },
    listStyleType: {
      none: 'none',
      disc: 'disc',
      decimal: 'decimal'
    },
    margin: (theme, { negative }) => ({
      auto: 'auto',
      ...theme('spacing'),
      ...negative(theme('spacing'))
    }),
    maxHeight: {
      full: '100%',
      screen: '100vh',
      icon: '30px',
      phone: '32px'
    },
    maxWidth: {
      xs: '20rem',
      sm: '24rem',
      md: '28rem',
      lg: '32rem',
      xl: '36rem',
      '2xl': '44rem',
      '3xl': '48rem',
      '4xl': '56rem',
      '5xl': '64rem',
      '6xl': '72rem',
      '10xl': '90rem',
      full: '100%',
      brand: '216px',
      initial: 'initial',
      contained: '1170px'

    },
    minHeight: {
      '0': '0',
      full: '100%',
      screen: '100vh'
    },
    minWidth: {
      '0': '0',
      full: '100%'
    },
    objectPosition: {
      bottom: 'bottom',
      center: 'center',
      left: 'left',
      'left-bottom': 'left bottom',
      'left-top': 'left top',
      right: 'right',
      'right-bottom': 'right bottom',
      'right-top': 'right top',
      top: 'top'
    },
    opacity: {
      '0': '0',
      '25': '0.25',
      '50': '0.5',
      '75': '0.75',
      '100': '1'
    },
    order: {
      first: '-9999',
      last: '9999',
      none: '0',
      '1': '1',
      '2': '2',
      '3': '3',
      '4': '4',
      '5': '5',
      '6': '6',
      '7': '7',
      '8': '8',
      '9': '9',
      '10': '10',
      '11': '11',
      '12': '12'
    },
    padding: theme => theme('spacing'),
    placeholderColor: theme => theme('colors'),
    stroke: {
      current: 'currentColor'
    },
    textColor: theme => theme('colors'),
    width: theme => ({
      auto: 'auto',
      ...theme('spacing'),
      '1/2': '50%',
      '1/3': '33.333333%',
      '2/3': '66.666667%',
      '1/4': '25%',
      '2/4': '50%',
      '3/4': '75%',
      '1/5': '20%',
      '2/5': '40%',
      '3/5': '60%',
      '4/5': '80%',
      '1/6': '16.666667%',
      '2/6': '33.333333%',
      '3/6': '50%',
      '4/6': '66.666667%',
      '5/6': '83.333333%',
      '1/12': '8.333333%',
      '2/12': '16.666667%',
      '3/12': '25%',
      '4/12': '33.333333%',
      '5/12': '41.666667%',
      '6/12': '50%',
      '7/12': '58.333333%',
      '8/12': '66.666667%',
      '9/12': '75%',
      '10/12': '83.333333%',
      '11/12': '91.666667%',
      full: '100%',
      screen: '100vw',
      icon: '30px',
      dot: '20px',
      hamburger: '32px'
    }),
    zIndex: {
      auto: 'auto',
      '0': '0',
      '10': '10',
      '20': '20',
      '30': '30',
      '40': '40',
      '50': '50'
    }
  },
  variants: {
    accessibility: [],
    alignContent: [],
    alignItems: ['responsive'],
    alignSelf: [],
    appearance: [],
    backgroundAttachment: [],
    backgroundColor: [],
    backgroundPosition: [],
    backgroundRepeat: [],
    backgroundSize: [],
    borderCollapse: [],
    borderColor: [],
    borderRadius: [],
    borderStyle: [],
    borderWidth: [],
    boxShadow: [],
    cursor: [],
    display: ['responsive'],
    fill: [],
    flex: [],
    flexDirection: ['responsive'],
    flexGrow: [],
    flexShrink: [],
    flexWrap: ['responsive'],
    float: [],
    fontFamily: [],
    fontSize: [],
    fontSmoothing: [],
    fontStyle: [],
    fontWeight: [],
    height: ['responsive'],
    inset: ['responsive'],
    justifyContent: ['responsive'],
    letterSpacing: [],
    lineHeight: [],
    listStylePosition: [],
    listStyleType: [],
    margin: ['responsive'],
    maxHeight: [],
    maxWidth: ['responsive'],
    minHeight: [],
    minWidth: [],
    objectFit: [],
    objectPosition: [],
    opacity: [],
    order: [],
    outline: [],
    overflow: [],
    padding: ['responsive'],
    placeholderColor: [],
    pointerEvents: [],
    position: ['responsive'],
    resize: [],
    stroke: [],
    tableLayout: [],
    textAlign: [],
    textColor: [],
    textDecoration: [],
    textTransform: [],
    userSelect: [],
    verticalAlign: [],
    visibility: [],
    whitespace: [],
    width: ['responsive'],
    wordBreak: [],
    zIndex: []
  },
  corePlugins: {},
  plugins: []
}

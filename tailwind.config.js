module.exports = {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        screen: {
          sm: '480px',
          md: '768px',
          lg: '976px',
          xl: '1440px'
        },
        extend: {
          colors:{
            backColor: 'hsl(11, 1%, 1%)',
            secondColor: 'hsl(45, 98%, 49%)',
            secondColorLight: 'hsl(45, 63%, 68%)',
            brightRed: 'hsl(12, 88%, 59%)',
            brightRedLight: 'hsl(12, 88%, 69%)',
            brightRedSupLight: 'hsl(12, 88%, 95%)',
            darkBlue: 'hsl(228, 39%, 23%)',
            darkGrayishBlue: 'hsl(227, 12%, 61%)',
            veryDarkBlue: 'hsl(11, 1%, 1%)',
            veryPaleRed: 'hsl(13, 100%, 96%)',
            veryLightGray: 'hsl(0, 0%, 98%)',
          }
        },
      },
      plugins: [],
}

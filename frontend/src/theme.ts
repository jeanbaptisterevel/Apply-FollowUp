import { createTheme, ThemeOptions } from "@mui/material/styles";

const darkThemeOptions: ThemeOptions = {
  palette: {
    mode: "dark",
    primary: {
      main: "#7d37d8",
    },
    secondary: {
      main: "#53b7c9",
    },
  },
};

export default createTheme(darkThemeOptions);

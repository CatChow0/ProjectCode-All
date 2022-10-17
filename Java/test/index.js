const htmlEl = document.documentElement,
      outputExample = document.getElementById('output');
      
let savedTheme = 'light';

// ********************************************************************
//  NOTE: The localStorage example WILL NOT WORK HERE ON STACKOVERFLOW
//        Instead it will throw a "SecurityError" and rightfully so...
//        You'll have to use that part of the example in your
//        own project to see it in action...... JUST FYI.
//        So you will need to UNCOMMENT the commented out stuff for
//        the localstorage example to work. Left it commented out for
//        for other readers to not see the valid securityerror....
// ********************************************************************

// Toggle the theme and update their local storage.
toggleTheme = (bool) => {
   const theme = bool ? 'light' : 'dark';
   htmlEl.dataset.theme = theme;
   // localStorage.setItem('savedTheme', theme);
   
   outputExample.innerText = `${theme} theme`;
}

// Handle their saved preferred theme.
setSavedTheme = () => {

  // If there is no current theme in localstorage then give them one as a default.
  // Like for first time visitors...
  // Uncomment this block and the localstorage piece above for the localstorage example.
  /*
  if (localStorage.getItem('savedTheme') === null) {
    localStorage.setItem('savedTheme', savedTheme);
  } else {
    savedTheme = localStorage.getItem('savedTheme');
  }
  */
  
  htmlEl.dataset.theme = savedTheme;
  outputExample.innerText = `${savedTheme} theme`;
}

// Set the default.
setSavedTheme();
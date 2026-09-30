Q1: Your form sends data with POST rather than GET. Explain what would go wrong if it used GET instead. Your answer should say something about what a browser does when a page is refreshed.

Answer: I use POST because it does not put the form data in the URL. If we use GET, the data will be added to the URL. When the browser refreshes the page, it may send the same GET request again, which can repeat the action or show the same data again.  

Q2: When validation fails, your controller does not run the code that saves the record — and you did not write an if statement to stop it. Explain what actually stops it, and where the visitor ends up.

Answer: When validation fails validation stops the code automatically. Laravel checks the data first, and if there is an error, it does not continue to the code that saves the record. The visitor is sent back to the form page with the error messages. 

Q3: Your success message is displayed from the layout, which renders on every page. Explain why it does not appear on every page.

Answer: The layout appears on every page, but the success message only appears when there is a success message stored in the session. If there is no success message, nothing is shown. 

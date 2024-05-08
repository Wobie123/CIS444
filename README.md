2024 CSUSM CIS444 SHAUN-INN-WU

HW1
Create and test an HTML document that describes a table with the following contents: The columns of the table must have the headings “Pine,” “Maple,” “Oak,” and “Fir.” The rows must have the labels “Average Height,” “Average Width,” “Typical Life Span,” and “Leaf Type.” You must also add a second-level column label, “Tree,” and a second-level row label, “Characteristics.”  You should research for the appropriate data cell values.
![1_](https://github.com/Wobie123/CIS444/assets/98444199/39556222-0a6e-43e2-abb7-cad4c2d4b5c9)

HW2
Create and test an HTML document that describes nested ordered lists of cars. The outer list must have three entries: compact, midsize, and sports. Inside each of these three lists, there must be two sublists of different body styles: two-door, four-door, coupe, or convertible. The compact- and midsize-car sublists are two-door and four-door; the sports-car sublists are coupe and convertible. Each body-style sublist must have at least three entries, each of which is the make and model of a particular car that fits the category. The outer lists must use uppercase Roman numerals, the middle lists must use lowercase letters, and the inner lists must use Arabic numerals. The background color for the compact car list must be blue; for the midsize car list, it must be green; for the sports car list, it must be red. All the styles must be in a document style sheet.  Put all style-sheet information in an external style sheet.
![2_](https://github.com/Wobie123/CIS444/assets/98444199/8fadd2b1-1b6d-4c51-bec7-ae124d4b1ef3)


HW3
Write, test, and debug (if necessary) HTML file with the Javascript codes in an external file for the following problem:
Input: a number, n, using prompt, so that the script can display the first n + 1 Fibonacci numbers.
Output: a bordered table of numbers with proper caption and headings in which the first column displays the numbers from 0 to n and the second column displays the first n+1 Fibonacci numbers.
For example, if a user enters 10 to be the value of n, the first column will include 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, and the second column will include 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55.
Your Javascript codes must include a function to compute the corresponding Fibonacci number. This function is to be called to generate a corresponding Fibonacci number for each number in the first column of the table.   You must use document.write to produce the desired output. Use the external CSS document for the display of the table.
![3_](https://github.com/Wobie123/CIS444/assets/98444199/e9c68065-a7a7-4e78-a50e-4f3fca8e3ff4)


HW4
Develop and test an HTML document to use the DOM 2 event model that has text boxes for apple (99 cents each), orange (79 cents each), and banana (59 cents each), along with a Submit button. These text boxes take a number, which is the purchased number of the fruit. Add reality checks to the text boxes of the document to ensure that the input values are numbers in the range from 0 to 99. Each of the text boxes should have its event handler for this purpose. These handlers must also add the cost of their fruit to the total cost. An event handler for the Submit button must produce an alert window with the message Your total cost is $xxx.xx, where xxx.xx is the total cost of the chosen fruits with 2 decimal places, including 7.75 percent sales tax. This handler must return false (to avoid actual submission of the form data). You also must use an external style sheet to display various input boxes in an appropriate background color.
![4_](https://github.com/Wobie123/CIS444/assets/98444199/3e739312-a697-47f4-b6d1-b2804cbbba9f)


HW5
Create a document that has a small image of your picture, which must appear with the center at the position of the mouse cursor when the mouse button is clicked, regardless of the position of the cursor at the time.  The picture must disappear when the mouse button is released.  Include a heading explaining what the page is for.  Use an external style sheet to display the heading in green color.
![5_](https://github.com/Wobie123/CIS444/assets/98444199/9ccaefae-3956-4d61-96b4-81ccea448248)


HW6
1. You must set up a teams table in your own database on the MySQL server.
2. The teams table must be created with the following columns with proper types: teamID, teamName, startYear, ownerName, GMName, coachName, MVP, arenaAddress, city, state, zipCode, phone, divWins, divLoses, confWins, confLoses, overallWins, overallLoses
3. The primary key of the teams table must be teamID that must be automatically incremented.
4. You must enter at least 3 real, up-to-date records about NBA teams into the teams table, including the following information for the Warriors:
Warriors, 1946, Joe Lacob, Michael Joseph Dunleavy Jr., Steve Kerr, Steven Curry, 1 Warriors Way, San Francisco, CA 94158, (888)479-4667, 12, 4, 33, 19, 53, 29
5. You must write the PHP code to allow a user to enter a team’s number of overall wins.
6. The script should then display all the information for the teams from the teams table with the number of wins more than or equal to the input number specified by the user.  The team's Information must be displayed in the HTML bordered table format with the proper table headings. The script must be flexible enough so that everything will work even if the table structure is modified in the future.
7. All the implementation must be on your personal document root directory in your account on the class server. Your implementation cannot be on your shared project team directory.
![6_](https://github.com/Wobie123/CIS444/assets/98444199/5e950272-848a-4c44-99c2-443e09c8fe13)

HW7
Write, test, and debug (if necessary) each of the documents described:
1 Create an XML schema for a catalog of cars, where each car has the child elements make, model, year, color, engine, number_of_doors, transmission_type, and accessories. The engine element has the child elements number_of_cylinders and fuel_system (carbureted or fuel injected). The accessories element has the attributes radio, air_conditioning, power_windows, power_steering, and power_brakes, each of which is required and has the possible values yes and no.
2 Create an XML document with at least three instances of the car element defined in the XML schema of Exercise 1. Process this document by using the XML schema of Exercise 1, and produce a display of the raw XML document.
3 Create a CSS style sheet for a copy of the XML document of Exercise 2, and use it to create a display of that document.
4 Create an XSLT style sheet for one car element of a copy of the XML document of Exercise 2, and use it to create a display of that document.
5 Modify the XSLT style sheet of Exercise 4 to format all the car elements in a copy of the XML document of Exercise 2, and use the style sheet to create a display of the whole document.


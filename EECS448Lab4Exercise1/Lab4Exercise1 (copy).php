//Create a php program that displays a 100x100 multiplicatation table. 
//The first row and first column should be the 1...100 and the inner parts of the table should be the multiples.

INITIALIZE HTML table 100x100
FOR 1 to 100
	populate top row
FOR 1 to 100
	populate left column
FOR 2 to 99
	FOR 2 to 99
		populate each cell with the multiple of corresponding left column and top row number
			eg. 		1	2	3	4	...	100
				1	1	2	3	4	...
				2	2	4	6	8	...
				3	3	6	9	12	...
				4	4	8	12	16	...
				...
				100

		Nested for-loop will go first row first col, first row second col, first row 3rd col...
NOTE: Adding tags via PHP, examples?
Simple recursion should work, PHP has for loops, etc.
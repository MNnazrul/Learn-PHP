## PHP echo and print Statements

With PHP, there are two basic ways to get output: echo and print.

In this tutorial we use echo or print in almost every example. So, this chapter contains a little more info about those two output statements.

### PHP echo and print Statements

echo and print are more or less the same. They are both used to output data to the screen.

The differences are small:

- echo has no return value while print has a return value of 1 so it can be used in expressions
- echo can take multiple parameters (although such usage is rare) while print can take one argument.
- echo is marginally faster than print.

### The PHP echo statement

- The echo statement can be used with or without parentheses: echo or echo().
  ```PHP
  echo "Hello";
  //same as:
  echo("Hello");
  ```
- Display Text

  The following example shows how to output text with the echo command (notice that the text can contain HTML markup):

  ```PHP
  echo "<h2>PHP is Fun!</h2>";
  echo "Hello world!<br>";
  echo "I'm about to learn PHP!<br>";
  echo "This ", "string ", "was ", "made ", "with multiple parameters.";
  ```

There is a big difference between double quotes and single quotes in PHP.

Double quotes process special characters, single quotes does not.

# PHP Foreach Loop and Unset Unexpected Behavior

This repository demonstrates a common, yet subtle, error in PHP related to using `unset()` within a `foreach` loop.  When iterating over an array with `foreach`, PHP creates a copy of the array's internal pointer. Modifying the array's structure (like using `unset()`) during iteration might lead to unexpected results.

The `bug.php` file shows an example where `unset()` does not work as expected because foreach is creating a copy of the array instead of passing the array by reference

The `bugSolution.php` file provides a corrected version, illustrating the correct way to modify arrays during iteration.

This example highlights the importance of understanding how PHP handles references and iteration to avoid subtle bugs.
<?php

/*
1. Nắm được khái niệm Interface và abstract class
2. Biết cách implement nhiều interface 
3. Hiểu được sự khác nhau giữa interface và abstract class
4. Biết được khi nào dùng interface, khi nào dùng abstract class
*/

interface A {
}

interface B {
}

interface C extends A, B {

}

class D implements A, B {

}

echo "asd";
Apache main protocol is **https** and his port is **80**

## 3 root linux folder : 
1. home, 
2. bin, 
3. lib

## How Mysql deal with Oracl's sequence 
MySQL does not provide a sequence object, beacause we use stored procedures and user-defined functions to emulate DROP SEQUENCE, CREATE SEQUENCE statements and NEXTVAL function.

one situation required sudo : paquet installation

## Development site
I use 
1. HTML5, 
2. CSS3, 
3. Javascript, 
4. Bootstrap, 
5. Jquery 

## Database Question
```
SELECT def_text FROM definitions WHERE(SELECT word_id from WORDS WHERE base_form);
```

**Code Correction**
```
SELECT count(*) FROM words WHERE in(SELECT wordçid FROM translations WHERE translated_for IS NOT NULL);
```

## Difference between extends and implements
1. Extends : This is used to get attributes of a parent class into base class and may contain already defined methods that can be overridden in the child class.
2. Implements : This is used to implement an interface by defining it in the child class.
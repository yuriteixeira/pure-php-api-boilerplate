# Pure PHP API Boilerplate

This is an example of what an API written in PHP without using any library or framework (but still with OOP, URI routing in the code, dependency injection and friends) would look like.

## Motivation

Got a small project and, in between the many possible choices (Go or PHP with some micro-framework) and also thinking about Silex or the upcoming Symfony Flex, I wondered: 

> "What if we do it in PHP, bottom up, no libs added?"

Looked like an interesting idea and learning/recap oportunity. After all, one of the claims of PHP is that it is a language made for the web. 
Therefore, how hard would be to build RESTful API without one single external dependency? Can I do routing, dependency injection, logging, 
use persistence mechanisms and such without the enormous amount of code that libraries that take care of it? What about the tradeoffs?

## Quick stats

```
~/Projects/pure-php-api-boilerplate on master via 🐘 v7.2.0
➜ phploc .
phploc 4.0.0 by Sebastian Bergmann.

Directories                                          4
Files                                                8

Size
  Lines of Code (LOC)                              146
  Comment Lines of Code (CLOC)                       4 (2.74%)
  Non-Comment Lines of Code (NCLOC)                142 (97.26%)
  Logical Lines of Code (LLOC)                      50 (34.25%)
    Classes                                         18 (36.00%)
      Average Class Length                           3
        Minimum Class Length                         1
        Maximum Class Length                         8
      Average Method Length                          2
        Minimum Method Length                        1
        Maximum Method Length                        6
    Functions                                        8 (16.00%)
      Average Function Length                        4
    Not in classes or functions                     24 (48.00%)

Cyclomatic Complexity
  Average Complexity per LLOC                     0.24
  Average Complexity per Class                    1.80
    Minimum Class Complexity                      1.00
    Maximum Class Complexity                      3.00
  Average Complexity per Method                   2.00
    Minimum Method Complexity                     1.00
    Maximum Method Complexity                     3.00

  Method Calls                                       7
    Non-Static                                       7 (100.00%)
    Static                                           0 (0.00%)

Structure
  Namespaces                                         3

  Methods                                            5
    Scope
      Non-Static Methods                             5 (100.00%)
      Static Methods                                 0 (0.00%)
```

## What you're gonna find now

* A PSR-4 compliant autoloader, that maps the namespace `PurePhpApi` to
the `src` folder (copied from http://www.php-fig.org/psr/psr-4/examples/)

* A simple front controller, request dispatcher and dependency injection container

* Two custom exceptions for when a route ain't found (not mapped) 
and when a service ain't defined in the DiC

* A config file in PHP (that also defines the error reporting and starts
a session - yes, starting a session in a config file, you read that :D)

## What is next?

* What about unit tests withou other libraries? How mocking (or something similar) 
and asserting and reporting would look like? 
How much worths not adding even phpunit as a dev dependency?

* More complex commands (eg: oauth token callback, loading and outputting some data, things like that)

* Exemplify better the use of the DiC, making services to depend on other services

* Regular expression (or some sort of expressive) routes, where we have a route like 'GET /user/{id}'

* Some event handling, maybe?

* **Comparisons with similar solutions, with and without micro-frameworks or a minial libs set
in other languages and platforms, such as Java, Go, Python and Ruby**

## What you'll (hopefully) not find?

Purism, dogmatism or any kind of "the only truth" :) I'm not (and I will not) strictly follow PSR-1/2 code styles,
applying the PSR-7 for handling requests), all SOLID principles, etc. 

You might never see here everything of anything, but a little bit of what makes sense from
here and there. I value clean code, solid principles and the work the PHP community does
trying to create such needed standards (which are specially valuable for frameworks interoperability, 
which has great impact the productivity of so many companies and professionals), but *freedom allied with good judgment*
are also there to be used, when feel like you know what you need.

**BTW, PRs are welcome! Worse case scenario, we can have an interesting conversation ;-)**

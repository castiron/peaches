#!/usr/bin/env bash

phpdoc -d src/Support -t temp --template="xml" 
phpdocmd temp/structure.xml docs/Support
rm -rf temp/

phpdoc -d src/Structures -t temp --template="xml"
phpdocmd temp/structure.xml docs/Structures
rm -rf temp/

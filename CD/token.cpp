#include<bits/stdc++.h>
using namespace std;

bool isOperator(char c) {
    string operators = "+-*/%=&|<>(){}[]^~!?:.,;";
    return operators.find(c) != string::npos;
}

bool isKeyword(const string& word) {
    static unordered_set<string> keywords = {
        "auto", "break", "case", "char", "const", "continue", "default", "do", "double",
        "else", "enum", "extern", "float", "for", "goto", "if", "int", "long", "register",
        "return", "short", "signed", "sizeof", "static", "struct", "switch", "typedef",
        "union", "unsigned", "void", "volatile", "while", "include"
    };
    return keywords.find(word) != keywords.end();
}

bool isIdentifier(const string& word) {
    if (!isalpha(word[0]) && word[0] != '_') {
        return false;
    }
    for (char c : word) {
        if (!isalnum(c) && c != '_') {
            return false;
        }
    }
    return true;
}

int main() {
    string input;
    cout << "Enter a string: ";
    cin >> input;

    if (isKeyword(input)) {
        cout << "'" << input << "' is a keyword." << endl;
    } else if (isOperator(input[0]) && input.length() == 1) {
        cout << "'" << input << "' is an operator." << endl;
    } else if (isIdentifier(input)) {
        cout << "'" << input << "' is an identifier." << endl;
    } else {
        cout << "'" << input << "' is a variable." << endl;
    }

    return 0;
}

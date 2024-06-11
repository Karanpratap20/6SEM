#include <stdio.h> 
 
int my_strlen(const char *str) { 
    int len = 0; 
    while (str[len] != '\0') { 
        len++; 
    } 
    return len; 
} 
 
void my_strcat(char *dest, const char *src) { 
    int i = 0; 
    int j = 0; 
    while (dest[i] != '\0') { 
        i++; 
    } 
    while ((dest[i++] = src[j++]) != '\0') { 
        ; 
    } 
} 
 
void my_strcpy(char *dest, const char *src) { 
    int i = 0; 
    while ((dest[i] = src[i]) != '\0') { 
        i++; 
    } 
} 
 
int my_strcmp(const char *str1, const char *str2) { 
    int i = 0; 
    while (str1[i] != '\0' && str2[i] != '\0' && str1[i] == str2[i]) { 
        i++; 
    } 
    return str1[i] - str2[i]; 
} 
 
int main() { 
    char str1[50] = "Hello, "; 
    char str2[50] = "world!"; 
    char str3[50] = "Hello, "; 
    char str4[50] = "world!";
    char str5[50] = "Hello, "; 
 
    printf("Length of string 1: %d\n", my_strlen(str1)); 
    my_strcat(str5, str2); 
    printf("Concatenated string: %s\n", str5); 
    my_strcpy(str3, str1); 
    printf("Copied string: %s\n", str3); 
    int result = my_strcmp(str1, str4); 
    if (result < 0) { 
        printf("String 1 is less than String 4\n"); 
    } else if (result > 0) { 
        printf("String 1 is greater than String 4\n"); 
    } else { 
        printf("String 1 is equal to String 4\n"); 
    } 
 
    return 0; 
}
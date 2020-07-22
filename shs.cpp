#include <iostream>
#include <string.h>
#include <limits.h>
using namespace std;
 
string s;
int n;
int cnt[100];
int steady[100];
char bduh[] = "BDUH";
 
int need = 0;
bool used[100];
 
int makeStringSteady(string input)
{
    for (int j = 0; input[j] != '\0'; ++j)
        n += 1;
    int k = n >> 2;    //k=2
    int result = n;    //result=8
    for (int i = 0; i < n; ++i)
    {
        ++cnt[input[i]];        //maybe checking count of each alpha
        cout<<cnt[i];
    }
    cout<<endl;
    for (int i = 0; i < 4; ++i)
    {
        steady[bduh[i]] = k - cnt[bduh[i]];
        need += (used[bduh[i]] = (steady[bduh[i]] < 0));
    }
    if (need == 0)
        result = 0;
    for (int l = 0, r = 0; r < n; ++r)
    {
        if (used[input[r]])
        {
            if (++steady[input[r]] == 0)
            {
                --need;
            }
        }
        while (need == 0 && l <= r)
        {
            result = min(result, r - l + 1);
            if (used[input[l]])
            {
                if (steady[input[l]]-- == 0)
                {
                    ++need;
                }
            }
            ++l;
        }
    }
    return result;
}
 
int main()
{
//     getline(cin, s);
s = "BDHBDUUDBUUUUBUHHUBBDHDBDUBUUBHHBDUDBBDU";
cout << makeStringSteady(s);
}
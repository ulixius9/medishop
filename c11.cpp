#include <iostream>
using namespace std;

int funwithstring() {
	// your code goes here
	int fb,fd,fu,fh,tb,td,tu,th;
	int len,flen,tlen,i,count;
    string str="BDHBDUUDBUUUUBUHHUBBDHDBDUBUUBHHBDUDBBDU";
    flen=tlen=0;
    //getline(cin,str);
    len=0;
    while (str[len]!='\0'){
        len++;
    }
    fb=fd=fu=fh=tb=td=tu=th=len/4;
    for(i=0;i<len;i++){
        if(str[i]=='H' and fh>0)
            fh--;
        else if (str[i]=='B' and fb>0)
            fb--;
        else if (str[i]=='D' and fd>0)
            fd--;
        else if (str[i]=='U' and fu>0)
            fu--;
        else
            break;
        flen++;
    }
    if (flen==len){
        return 0;
    }
    for(i=len-1;i>-1;i--){
        if(str[i]=='H' and th>0)
            th--;
        else if (str[i]=='B' and tb>0)
            tb--;
        else if (str[i]=='D' and td>0)
            td--;
        else if (str[i]=='U' and tu>0)
            tu--;
        else
            break;
        tlen++;
    }
    if (flen>=tlen){
        count=flen;
        for(i=len-1;i>-1;i++){
            if(str[i]=='H' and th>0)
                th--;
            else if (str[i]=='B' and tb>0)
                tb--;
            else if (str[i]=='D' and td>0)
                td--;
            else if (str[i]=='U' and tu>0)
                tu--;
            else
                break;
            count++;
        }
        return len-count;
    }
    else{
        count=tlen;
        for(i=len-1;i>-1;i--){
        if(str[i]=='H' and th>0)
            th--;
        else if (str[i]=='B' and tb>0)
            tb--;
        else if (str[i]=='D' and td>0)
            td--;
        else if (str[i]=='U' and tu>0)
            tu--;
        else
            break;
        count++;
        }
        return len-count;
    }
}

int main(){
    cout<<funwithstring();
    return 0;
}
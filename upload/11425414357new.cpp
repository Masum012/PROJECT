#include<iostream>

using namespace std;

int main()
{

    int k,i,j,n,p[10],m,z,cost[50],v,c[20][20],ver[100][100],total[100];
    int a,b,c,d;

    cout<<"Enter the no. of stages :";
    cin>>k;
    n=0;

    for(i=1;i<=k;i++)
        {
        cout<<"Enter no. of vertices in stage "<<i<<" :";
        cin>>total[i];
        n=n+total[i];
        for(j=1;total[i];j++)
            {
                cout<<"Enter the value of vertex "<<j<<" :";
                cin>>ver[i][j];
            }
        }



}

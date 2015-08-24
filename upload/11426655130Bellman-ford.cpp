#include <bits/stdc++.h>
#include <iostream>
using namespace std;

int main()
{
    int n,v,x;

    cout<<"Enter the no.of nodes";
    cin>>n;
    cout<<"Enter the value:";
    int edges[100][100];
    int par[100];
    int dis[100];
    for(int i=0;i<n;i++)
    {
        for(int j=0;j<n;j++)
        {
            cin>>edges[i][j];
        }
    }
    dis[0]=0;
    for(int i=0;i<n;i++)
    {
        dis[i]=1000;
    }
    for(int j=0;j<n;j++)
    {
        par[j]=0;
    }
    for(int i=0;i<n;i++)
    {
        for(int j=0;j<n;j++)
        {
            for(int k=0;k<n;k++)
                {
                    if(dis[j]+edges[j][k]<dis[k])
                    {
                        dis[k]=dis[j]+edges[j][k];
                        par[k]=j;
                    }
                }

        }
    }


    for(int i=0;i<n;i++)
    {

        cout<<dis[i]<<" ";
    }

cout<<"\n";

cout<<"parents node is:";

     for(int i=0;i<n;i++)
    {

        cout<<par[i]<<" ";
    }



    cout<<"\n";

    cout<<"Shortest path is: ";

    for(int i=0;i<n-1;i++)
    {
        if(i==0)
        {
            cout<<n-1<<" <- ";
            x=par[n-1];
        }

        else if(i<n-2)
            {
            cout<<x<< " <- ";
            x=par[x];
        }

        else
        {
             cout<<x;
            x=par[x];
        }
    }

}




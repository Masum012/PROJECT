#include<stdio.h>
int main()
{
    int n,i,j,k;
    printf("Enter number of element: ");
    scanf("%d",&n);
    int arr[n];
    int p;
    printf("Enter array elements: ");
    for(i=0;i<n;i++)
        scanf("%d",&arr[i]);
    for(i=0;i<n;i++)
        printf("%d  ",arr[i]);
    n=n+1;
    for(j=n-1;j>0;j--)
    {
       arr[j] =arr[j-1];
    }
    printf ("\nElement I want to insert at the begining :  ");
    scanf("%d",&p);
    arr[0]=p;
    printf("Array after inserting:  ");
     for(k=0;k<n;k++)
        printf("%d  ",arr[k]);

        n=n+1;
        printf("\nElement I want to insert at the last :  ");
        scanf("%d",&p);
        arr[n-1]=p;
         printf("Array after inserting:  ");
     for(k=0;k<n;k++) printf("%d  ",arr[k]);

     n=n+1;

     for(i=n-1;i>2;i--)
        arr[i]=arr[i-1];

        printf("\nElement I want to insert  :  ");
        scanf("%d",&p);
        arr[2]=p;
          for(k=0;k<n;k++) printf("%d  ",arr[k]);

}

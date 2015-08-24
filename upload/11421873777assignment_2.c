#include<stdio.h>
int arr[1000];
int n;
void main()
{
    input_array();
    insert_sort();
    binari_search();
}

void input_array()
{
    int i;
    printf("Enter array size: ");
    scanf("%d",&n);
    printf("Enter array elements: ");
    for(i=0;i<n;i++)
        scanf("%d",&arr[i]);
}

void linear_search(  int p)
{
    printf("he element is at position ");
   int i;
    for(i=0;i<n;i++)
    {
        if(arr[i]==p)
        {
            printf("%d ",i+1);
        }
    }
}

void binari_search()
{
    int value,i,p=0;
    printf("Enter element to be search : ");
    scanf("%d",&value);
    for(i=0;i<n;i++)
        if(arr[i]==value) p++;
    if(p>1) linear_search(value);
    else
    {
        int beg=0;
    int end=n-1;
    int mid = (beg+end)/2;

    while(beg<=end && arr[mid]!=value)
    {
        if(value<arr[mid])
        end=mid-1;
        else
        beg=mid+1;

        mid=(beg+end)/2;
    }

    if(value==arr[mid])
    {
        printf("The element is at position %d\n",mid+1);
    }

    else
    {
        printf("The element is not in the array\n");
        n=n+1;
        arr[n-1]=value;
        insert_sort();
    }

    }

}

void insert_sort()
{
    int i,j;
    for( i=1;i<n;i++)
    {
        for( j=0;j<i;j++)
        {
            if(arr[i]<arr[j])
            {
                int temp ;
                temp=arr[i];
                arr[i]=arr[j];
                arr[j]=temp;
            }
        }
    }
    printf("sorted array : ");
    for(i=0;i<n;i++)
        printf("%d ",arr[i]);
        printf("\n");
}

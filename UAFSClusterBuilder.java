import java.io.*;
import java.util.HashSet;
import java.util.Random;


public class UAFSClusterBuilder{
    private double [][] X;
    private double [][] centroids;

    //Training on Iris dataset. I will change this to be dynamic later.
    private static int rows = 150;
    private static int cols = 4;
    
    UAFSClusterBuilder(String filename, int k)throws Exception{

        this.X = readData(filename); 
        this.centroids = selectCentroids(k);
    }

    double[][] selectCentroids(int k){

        double [][] centroids = new double[k][cols];
        HashSet<Integer> currentPoint = new HashSet<Integer>();
        Random r = new Random();

        for(int i = 0 ;i < k;i++){
            int newPoint = r.nextInt(rows);

            if(!currentPoint.contains(newPoint)){
                centroids[i] = X[newPoint]; 
            }else{
                while(currentPoint.contains(newPoint)){
                    newPoint = r.nextInt(rows);
                }
                centroids[i] = X[newPoint]; 
            }
            
        }

        return centroids;
    }

    double[][] readData(String filename) throws Exception{
       
        BufferedReader br = new BufferedReader(new FileReader(filename));

        String line = "";
        br.readLine();
        
        double [][] X = new double[rows][cols];
        int rcount = 0;
        while( (line = br.readLine()) != null){
            //Ignoring the ID feature
            line = line.substring(line.indexOf(",")+1,line.length());

            String [] temp = line.split(",");

            for(int i = 0 ;i < cols;i++){
                X[rcount][i] = Double.parseDouble(temp[i]);
            }
            rcount++;

        }
        
        br.close();
        return X; 

    }


    void print(double [][] m){
        for(double [] i: m){
            for(double j : i){
                System.out.printf("%.2f ",j);
            }
            System.out.println();
        }
        
    }

    //O(d) where d is the number of dimensions
    double euclideanDistance(int [] point, int [] cluster){

        double radicand = 0;

        for(int i = 0; i < point.length;i++){

            radicand += Math.pow(point[i] - cluster[i],2);
        }

        return Math.sqrt(radicand);

    }

    public static void main(String[] args)throws Exception {
       
        String filename = args[0];
        int k = Integer.parseInt(args[1]);
        
        UAFSClusterBuilder obj = new UAFSClusterBuilder(filename, k);

        obj.print(obj.centroids);
        
    }   


}
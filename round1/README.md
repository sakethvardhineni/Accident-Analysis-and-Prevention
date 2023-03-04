# Accident Analysis And Prevention
## Required Environment
  1. Git Bash  
  2. Visual Studio Code   
  3. Python
  4. Git
  5. Docker(Optional)
    
## Adopted libraries  
  1. pip
  2. numpy
  3. git
  4. joblib
  5. pandas
  6. sklearn
  7. matplotlib.pyplot
  8. flask
## Flow of Execution
  * Open GitBash  
  * Navigate to source code ```cd /path/to/source/code/```
  * pre-processing  the data
  * spliting the preprocessed data into test data and training data.
  *  training  the mlmodel.py with the training data using below command.  
      ```python mlmodel.py```
  * Then launch the web application using the main.py.
      ```python main.py```
  * From the above output, copy the URL address and open it in web browser.
  * Fill out the required fields and get the **Analysis of the Road Side Accident**.
 ## Commands to run the code  
 ```
 python mlmodel.py
 python main.py
 ```  
 ## Issues experiencing and Solutions  
  So far, there are no issues, but  we have preprocessed the dataset and splited the data into test data and training data , we are using 
  
  
  
  (are still training the data to predict the results. Also, the frontend part is not yet complete; we still need to add the CSS and a few dependencies. Also, once this environment is done, we are trying to implement it on Docker by building the image from this setup and hosting it on a server as a Docker container.)

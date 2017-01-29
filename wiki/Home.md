# Bitbucket FTP deployment PHP script

This script is for deploying Git code via FTP automatically on each commit.

## Step 1: set your credentials
You just need to set your Bitbucket username and password (so the script has access to private repositories) in *functions.inc.php*.

## Step 2: tell Bitbucket where the script is
For each repository that you want to deploy automatically, go into the **settings**, **services** and add **POST** as your service. Enter the URL where the *deploy.php* is available.

## Step 3: tell the script your ftp logins
Open *data.inc.php* and modify the array structure.

* for each project you need to enter the *git_slug* which you can see in the URL of Bitbucket. 
* for each project you can add lots of branches and use other ftp credentials for each


# Bugs / things to improve

* seperate the configuration into config.inc.php
* on a commit of a new branch, only the changed files will be deployed. An option to redeploy a whole repository would be cool
* an easy way for extending the ftp types would be cool. Currently, you can modify the *switch* cases in the function *get_branch_ftp_data* of *functions.inc.php* to e.g. use the type 'company_beta' and use the same ftp credentials for each and just vary the ftp path in the *data.inc.php*. Needs improvement.
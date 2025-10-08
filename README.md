# AWS Elastic Beanstalk Blue/Green Deployment Demo (PHP + RDS + S3)

## Overview
This project demonstrates a **Blue/Green deployment setup** using **AWS Elastic Beanstalk**, **RDS**, and **S3**.

- **Blue environment:** Stable version (Blue header)
- **Green environment:** New version (Green header)
- PHP app connects to RDS (MySQL) and uploads files to S3.

## Steps to Deploy
1. Deploy **php-blue-app-v2.zip** to Blue environment.
2. Clone Blue → create Green.
3. Deploy **php-green-app-v2.zip** to Green environment.
4. Test Green.
5. Swap URLs when Green is stable.
 
   
## Project Documentation 
Detailed explanation , screenshots and architecture diagram : (https://multi-tier-aws-project.blogspot.com/2025/10/aws-blue-green-deployment-project.html)

**Note** : Lambda and PHP code were adapted using AWS SDK documentation and AI-based code assistance.
The main focus of this project is AWS architecture , deployment and Blue/Green strategy.


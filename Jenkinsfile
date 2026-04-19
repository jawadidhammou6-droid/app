pipeline {
    agent any

    stages {

        stage('Checkout') {
            steps {
                git 'https://github.com/jawadidhammou6-droid/app.git'
            }
        }

        stage('Deploy') {
            steps {
                sh '''
                sudo cp -r * /var/www/html/
                sudo systemctl restart apache2
                '''
            }
        }
    }
}

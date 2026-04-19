pipeline {
    agent any

    stages {

        stage('Clone Code') {
            steps {
                git 'https://github.com/jawadidhammou6-droid/app.git'
            }
        }

        stage('Build Docker Image') {
            steps {
                sh 'docker build -t app .'
            }
        }

        stage('Deploy Container') {
            steps {
                sh '''
                docker stop app || true
                docker rm app || true
                docker run -d -p 8082:80 --name app app
                '''
            }
        }
    }

    post {
        success {
            echo 'CI/CD SUCCESS 🚀 Application déployée'
        }
        failure {
            echo 'CI/CD FAILED ❌ Vérifier logs'
        }
    }
}

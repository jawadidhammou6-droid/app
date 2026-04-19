pipeline {
    agent any

    stages {

        stage('Clone Repository') {
            steps {
                git 'https://github.com/jawadidhammou6-droid/app.git'
            }
        }

        stage('Build Docker Image') {
            steps {
                script {
                    sh 'docker build -t student-app .'
                }
            }
        }

        stage('Stop Old Container') {
            steps {
                script {
                    sh 'docker stop student-app || true'
                    sh 'docker rm student-app || true'
                }
            }
        }

        stage('Run Application') {
            steps {
                script {
                    sh 'docker run -d -p 8082:80 --name student-app student-app'
                }
            }
        }
    }

    post {
        success {
            echo 'CI/CD terminé avec succès 🎉 Application déployée'
        }
        failure {
            echo 'Erreur dans le pipeline ❌'
        }
    }
}
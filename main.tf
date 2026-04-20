provider "local" {}

resource "local_file" "example" {
  content  = "Hello DevOps Project 🚀"
  filename = "test.txt"
}

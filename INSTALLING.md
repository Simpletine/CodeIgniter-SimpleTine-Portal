
Installing SimpleTine Portal 1.x
===================================
Before installing, please check that you are meeting the minimum server requirements.
SimpleTine Portal integrates with [Ion Auth 4](https://github.com/benedmunds/CodeIgniter-Ion-Auth/tree/4), needs [CodeIgniter 4.x](https://github.com/codeigniter4/CodeIgniter4), PHP 7.1, and Composer.

---
## Configuration
After installation, you can choose the following workflow based on your needs. For those unfamiliar with Ion Auth 4, it's advisable to gain a basic understanding before proceeding to avoid confusion along the way.

1. Download project and extract to your project directory
2. Copy or rename `env` to `.env` or using cmd
```bash
$ copy env .env
```

3. Set `CI_ENVIRONMENT` to `development` or using cmd
```shell
$ powershell -Command "(Get-Content .env) -replace '# CI_ENVIRONMENT = production', 'CI_ENVIRONMENT = development' | Set-Content .env"
```

4. Setup Relational Database
```bash
$ php spark migrate install_ion_auth
$ php spark migrate CreateSessions
```

```bash
$ php spark db:seed IonAuthSeeder
```

5. Start App
```bash
$ php spark serve
```

---

### Default Login
> Username: admin@admin.com

> Password: password


## Empty Page Sample
> Visual Studio Code short code
```html
.row>.col-12>.card>.card-header+.card-body
```

> HTML Format
```html
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of the card's
                    content.
                </p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
    </div>
</div>
```
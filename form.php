<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form - Isi validasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url(data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxISEhUTEhMVFRUXGBoYGBgYGBoXFxcYGhcWFxgfGhsYHSggGh4lGxYVITEhJSkrLi4uGB8zODMsNygtLisBCgoKDg0OGhAQGy0lHyUtLS0tKy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIALcBEwMBIgACEQEDEQH/xAAbAAABBQEBAAAAAAAAAAAAAAAEAAIDBQYBB//EAD4QAAEDAgQEBAUCBAUDBQEAAAEAAhEDIQQSMUEFUWFxEyKBkQYyobHwQsFSYtHhFBUjcvFDgqIkM1OSwgf/xAAaAQADAQEBAQAAAAAAAAAAAAAAAQIDBAUG/8QAJBEAAgICAgICAwEBAAAAAAAAAAECEQMhEjEEQRNRIjJhocH/2gAMAwEAAhEDEQA/APPy1LKpsqWVfRtHzvIiypZVNlSypUHIhypBqlhLKig5DMq7lT8q7CdC5DMqWVSAJQihciPKllUzGypW0Ehq2DBq7lR7KIT/AAQjkX8bYA1i74S23wv8MMqkeMHtLgXMb8ocABqYkaza8ID4j4A7DvNj4bj5DrG+Ukbge+qyXkQc+C7NH4s1Dm+jLliblRlSmonMWxg1QPCUKbIuFiCSHKn0qcmF0tUtAahA09hGGwbDBJkzdpMA+oWjwODw1TO2pRY0m+ZroymItG06jRZeobJ+HxBiJiyznBtdm+PLGLpofxDB06YADiXSetuVuqr2qas8uN1HC0iqWzCc03obC7CdlShUTY2EoToShArGpJ0JQmgs4AuwugLsICxsJJ8LiBWR5U5tMojwehRDW2AgWv1UNm8YX2DDDlMfSRwYuupqLNXBUVhplIMVj4Ka6knyM3iYFkVrhPh+pUYHtLb7EwR9E2jhNCSI3E3Xo/AcLQAaILrax5QY2O0LDPncFo6PH8ZTb5HmHEOGPouyuiRGhkXAMTzQ7aEr2PF8KwjmnMxoPPcfkrA/EfCW0HjJdpuDc22EneFOHylPXsrN4XD8l0Z5mHhENYnEFXHw5i6VGqPEZmeYLZLcouC2QecG+0hXmzLHHkycOFzlxiC4HhVWr/7dNzuoFvfRazguEwtHyVBNRzR5nQQHfqDZAy3mFsMJxBj6bTTY4MLREZQBMRImOQWE4zgHVazg9rmX8sEAtEkG15dqdtdSvMn5U8uo6PSh48ce2aXhWJBc7zgsBDaYgQ7LOm5MQi+N8NFem+kSPOJb/K8XB57Xjad1nsLjGU6BoMe4vBDp/iLT5j/Ltpy11WsoVMtNhe7M+xtJ8ptMnUiR9Fg001JG+mqZ43isK5pLXAhwMEHUEWKCdTXrnxRwVlcOe1h8bKC0t/V0IOvlkjfZee1cBImb7jdeth8lZFZ5WbxXFlJ4a46mrNuGGhsUTT4YcwJbmafb3W/yJGHwtmec1Nhb7hPCsOHeKGzlIkOuQQQZar3H4DB4qk7LTAcf1gBrwepIWUvLinVMpeDJq72eU0qYdvfdG0OC1HmGgm0+iucP8OupPmoMzAdRuPuCvRuD8Iw7g2rTBAGlzpuLqcvlqP6mmHwr/c8wp8GptluIzUpHlcQQddY/UEO/hGHNN5p4gOqNNmkZQ8dJXrvxLwWjiGAPaCWgxcgiYmCO2683+JPgx1Fvi0Tnp2lp+dv9d1OHyVN7dP8AwrP43BXGKa/0x8JQpX0yDcQuEL0DyXZHC7CkDU7IgEmQwlCkypZUwGQllUganBiAoiypKfw0kWPiyxdR5rjaSKeuBi5rPSojFILhYp2NTixSMGFNROpI0NSNNOxNWBtporDYypTnI8tnWCnCmmliTp9gk10PHFazdHnSOf3Q+Ixb3iHOJGt0805TqVCCJB5ixg3iJ5qZOEFZUec9ETcPDZi/0jumYnDtYWy1wk2I01i/K88le0cJUyWy6TA/uh8G9hLw7KIBvfXU6LgyXN2zuglBUi2+EOJvYDh3glhu3mwgEn6AW3lavH4ZtdrKrCJtMggnlM3FiCsFgcc9lRpY4AB0SCIk2OYEcvutbR4oKTm0XgQGgjKdLGRGhHzcjosJfi9Gq2tlFX4Y9tVxENdOgBjc3kkR8t0Z8FcRc9rqNQkuYCb6xJkW3vr1Cn4lxijUdNOoHANuYEgagkazraNlmeHY4Oqf4guDXsmcojxNSDG0xJ2tPZuNoFKmeh8Px7HOaA65aBlI30HmHNVfHfhsOqOqse1jTJeHA5QbE3GgOptzVRgMYC3xD5ROp5zAA6yguNcVfke4Oc97nEfqIB/eA33hWouD/Fkv8lsqsXXY17gf06xBve2s2An0UWDrVp/92GuO8Sbeu/TZUOEqPL3S7a/MyWgn2n3WiwWHa1odPmj9WrdrDWbWWnJyIcUui7+Eq5OIfSqDO3wXFwDeRZduhzDWRzjWynxeBNKo4TmafMxw0c39JkfkrOcGrGhjaT3PaGOd4UZiSAQWiT/unstm/OTUpupwadTUcnAX5Xdy5jnbJzcZ/wALUE4natMuYAbn2VpwvGPpsyw0NFouqmmNFLVqNiE3sZfU8bSgkxPKZQ1fHMqNIbHIg7hZPFVmgzN977IZhyuzA21HMKo4iXkouOJ/A4q0y6k4BwuGnnHMLLcOwjqL/wD1NFuS4JcA6HDQGLhaDh/HQJEkba/dQcUqOqNcC8uB22tddOOU/wBZdHLOEG+cezP8fwtHPmouBDrkDRp6aKpyKzdQUTqB5Lsg6VWcOSNu6AMi5lRhpphprTkYuAO2nKl8KE8CFNVoOADiCAdDzQ5DUdA0JKXIuJWMtG00RSpIzCYTMbQOpsEYeHODcxiJiRJv2AlcksiR6EcbZVGgon0lef5PVgGNSBGpk6aITF4N1M5XtLTySjki3plSxtdorAxOcxT5F3ItLM6IBSMTBjsuVMM4MNQjyCZOsRrMI/CAgzNuW5PIA6lEMY5wIqHM114I0vp25eqylkadI0jjTVsD4bh21KQfTqQTYiASHcp16xaxVRX+HKznHM4wPMDncW6k6ajteFMzANY75i1mbIQHZSf4TaO31MrQ4drHNbAzDYukm1t7g/0XM/y7N1roouHYN7KjmS5uZtw5xM2tB33tsrPHYZjfOYLrHkCR9h6onFUWmHESQRHusxxWpVqF1PO17o0aZgmBoCI0+oSqh3ZBjBJgeXMTmb+kOAMidgREHad4UuHxhp1G2gFoiNr8yRzTeG8JrseGmCSNSScvO8XsfoFc4fAtzPeXBwgagba/shILKLG1yyo/KAGOmJJ1sbe5t1QFOt5gMt9P21idgtBisMXy1wABuC0c/tvPdVOH4RU8UmIbEOdsBz+gHOVM4lRZqMLRJZTdOwIa3WdZ9oA7rN4bD131ngMcDOtwwQT+rlfXVafC1C90tswANAiCI3PUzpyCd48RAJZzF5O9v3/qnQWZF+CfSrPBG0tPczPTe38qNGIADHEEBt3ude1zH/cS2390RxDige5oAzESYmAA4ZQOtjJ7ICpiRUe2nr8kAmQ0TMHmYzew5prQMXC6w/xVJ1QAtzRIgsbnJmZ3m8deq9V4nRALKzXEFsH+KwBJDoNwWZm+reS8n4lSZIewNpw4ZYF4BmYHNzRYdeS9EbiA4U2scHSBTJF4IaHAjbTKZ0suXyNNM2xK0SltLx8kuAIi8NvbKTfUgjvZEYzgrHCxI9Vn/j6RlcSAAILgQIszKY3AP7egnAPiltUeHWeWuByyZh2gBk6E290YpOgmkO4l8POYZDi4fZCnhT3Fo0B36LZ0KbSLPvsCpH4TOz5ZMx5bHuOa6lmaMHiTMhiPh8tbmpuuDeeWxVeDUaC0lejYQUqbMtTyzu60qg4rwG7n0nsImQ2RMdFrjz26kY5MNbiZhosZUBKPq4So0ElpAQjmrri0zklaBqjN1GWIohMLVomZNEWHpjMMxgStLiBRqCZnus8xt1Y4LDFxkx+6xzV3Zth+qHHAs/hHpZcVzTohoiRbmkuf5mdPwoIp4XwzEWDspMdd0Y4G7WwA8tcDGmu32WNo8fr0iBVa5w1DbZe86nTnsrrhfHqFaqKJOSoBI80tc0ebyyNbO8p+ui4vl5M7Pj4o1mHoF2VtiWmZiJIAH/6HsVFXwTT4pqGWgyGgaaB0RffmgMR8RCl5g0EuABkx5pzGI1vPLRVLPiWpiBU0DZiBysdSeyFjk2HJJDcfhRm/0WiN8zjI9QPyOqGxYFGm57rkRAMxJIAkC+pXcRxIMaYPm0Fpl359lnMXxoCz/M75mbj5r39hI6rq5SXsw4xfomocXq+I51KHMgSHNIIDZkyLAEzqjBxWpVlrfDYYucxqECBMNAvqs+/4hqua2G0Rl0GWQIAtBIj6IvB8WqOEmiwkXlgcxw/+pPr9VKkgaCK3CqNU53Zi/d8mxmBLXCx9NlFw3iT6FQ0qhLwYylpzX0BtsdfqU7GcQqOjNlbE+UNE3uLnuD3SotpPawFsPYRDibmT09I5Qhr6Gi2fxAZZFpmJkgE7/XTsgMEGgtfIBkl0kDeT+y49wAcCLweWvI9J5oC7WgPjKTN9wNgRptohsRp8VxGnTuXDzOyi4i4G/YFB1cTns2BmMjk5oGjoNtis8HtLCIcYvDu4HPTojuGzlbYi5iNLmB7Afkp2FGlbS9v6/n1Q2NxEU3xlgfMSQA0ATvv+XVXxXiwDhRa64Ek2tG5HLus/icRUcwUw7M2SZkyd/MdCekwk2NItMNjDlqAPIa62fxJJO+Weg25jbW2rY8UmtotPnIaC7Zs/hgLNUmBgmxbT85E3c7Rot20QtN9RwzPJzOJJg9Z10HJSmVRfZ2Md4hfJcbWuGtudOV77qnx3FW1HNfTbldnI2Ay2DSTztPqj8NTpNsXT5Yc64aN7T+XOsoHD4Kk0S4vAykty/NY2sYiSN0AQ4zicFwDTlENEkDSRIA6yfZbL/wDnmKdUYZjNTeREiA28R2uO2VYWrUaaRDWTEmXOFjmjpOunZH/AuLFHF03PdAIjbR1tOk5uwWOZcommN0z0r4jw7X04nNTyHLGoygh3WYcTH8vv5a0im1xcSG3gbukQbbac9l658T4vI1mVgcLgltsj735STBA3AdsvOcVwqPEzwA4gxsGk5hryDojuscXRpPs0fwvha+JYHsc1ha1tiTfygzbYyfZWuLx2JwDmeJle19zlBt0nmsjhfiMYcxTe0Dw2kf77yNwAQAO4HO9rV+M24ii5leBBF4hzTfYWOhuOS68bcu6o58lR67NY34pw1ZobVbE87qJ7aLZLHSw31nLpbmNV5biuMNOVtEzLgMxFoPIbn+itOH8Wax/h1DlOhIPkmSBed4N1bhjTpSM1PI1bRta1Nhs14MpruFscwyB0cNlWMgiWkEcwZ+ykqPeREmOS0WNrpkPKn2irrYYtMEQo/DR5pJjqS6lI43EHo0gDdWmHwo1QJajsNU8nqssttaNsTSYY3DJKEydyksOL+zp5r6BxVp1KZY8DyuAvpJGl9JH1hY/4jw5FcujLlu0tsQCLabg790bwqm6oyoX/AMZ9CCHNLugeB7Ib4rrsLqbrAubcRAF9j1mb7hcOOuVHZPcSTG8eZVyZyWRGom8XuNReVc08fSY2GEHe1zf6fVYKqwaONpjtO9+t0sDiatLMaby0OF4iZHfQ9ua60zmezScW4kXDKQA0aj9RNoHQkyPdVF6rpgNt2076DVAUXFxzPJPTp622TnVnAyd4ne4Rf2BcYPCCLxA5gT9f2RVWiWhsGG7GR9rfm6BwFfM5rTYGL8tttUfisLUdTsQ5uktHXt2ToRLQe10io9vdvlOnIi8dlFiQ1pAa4QRMm59YFk3AYKo1wOVpl4AkjS02+itMROafDB2/sSAdo+vdPtCK2nWJDpMwCRF+h1016KSvDmtmQ2BGxnex0OqVOqYIgkF0WkSLiNBpZWOCosALntkzafpASWw6KyhgiQQxhcTaZgA2N99B+aIis8taBbygAcrEyes/sO6I45xgUaJIjM6zR1PbpushjuI1arQBmOk5QII0gN3uRefRD0NbJ8XxCn+mmXkHM9x0e42lx3AJsBIUeGzPqAEHmQNA0xAaEuF4Gu6YZDToX+WNzE6zOygxWKZRefDJqP8A4jAaHdI1IUFB/EW3NK2bOHc7XiSOv2TsXTLGPcHCXCALAEzqO0j6blAcMxBAdVffZs7wDqfeUDj8cXvzuOYgCJFhrEDkNe5QMJ/xLgBSLgAC0uNydoB6AAe6Nw3EG5KznGxAAAtE2bbcnfsVQ0XEuzEzMkmdyiMpLBeP1OPK0NA9Mx9QiwobxPLLcrhAb9bmY6z9UZwJjWsqOJIqZCW2u0C8jnt6Ktw9HOXOf8jLvJ5E5QO5/ZWWOqBoaQP9Qta4xyLY1HsexWUnei0q2a7gXF/DOTFVz/qtAL3OPkh0tcQdBzjYqfxqbw4BzKlQPeSWuzAA/L5ha9/fqvNajI6yJ97p2B4hUoOD6biD9CORG4shQoHOzbf5TTOUuYADN7WAuDtzVcKLaj4bYktGmmZ95R/DOOsrMuWg5MjgdtdOY0VXUc6ZbI8wgxYgGR7x9VV6J9guOoOouIAhzHNm4tEC39eoUjcSHVHuqNzCqRBkCHnzNyg/pzEtjkVFxAmS8SR5oLjrN/cSW92hCf4hzqQaQD4bic0eaHRAnkCCeko7Dovfh7H1aLazaYzZc1TLFi2WnuIGb6WVxwn4qNUEmkLCTDrwMvMX1Pss1haoLqT5AlpD81w4kFpB2ggfVF8AaKWdzh5HsyBxJyB0ixIkiWuBHQk7I5yitMXCMns31Ite0OYQWkSCmPLQQCRJ0EiT2G686rYyvhnuFOq9oJJiZE6GRcE8+eqrjxCq6p4pe4vB+Ym42tyXQs2jn+HZ6s6kn0xAiFl+EfFlwzEiDs9tweUt2nmrtvGmmn4jaZc25BDtrdJ5rRZEyHjaDSCks1V+NIJAoW/3f2ST5IXFlkGkyQDmvmtfNvm6kEDnZYfjBmtUaCDfXXReocffSqMJqxTm2cHKWv5E/Y8l5Ri8MZJYWxeSDEdDfvzXmYNts9PN6REx5c24uLHeZ/CoKhMgNkg6Dv8AkLj3ZbyII2O37XRfDKRe7M+7WaHS+0c10nOSNZnYXNFx+37oXFOeyCTOaNtbTuFZ4riDGzbW8jQ/0VTUx7nTIkciJkpsC54PjgCCO+3PqrTF47K0QSZl1+4iCO2qosC4BsQJ3+6NDalnAZgPWPQqkyWi64VhqrsriMoDZuRJcRPLmSjGtgf6jgCdgc256DaNtlT/AOa1HQJyc9f3UmAJnygvMXOw9T9leibLbMwNaA02uCdZ5oDi3EhTZmkDZouZ/vqp3eRpqVvKP4dTrbTmsfxbi5eRmAls5Gj5QDudzoPbZKTpAk2Nx1clvnqS9zs7mx8oiACdRbRo531XKWPL3jLmYAIa1hiCTE6XMEknoq6rTJAkyT5jzJPP83VhhqIoglwl5vlnQfzH9IuLarGzWg/j3FGtY2nTkuAguOoGoAPcD2Wep+YyYAEamwU2Dwb69Rwm9ySdP7IvH4dtIZWwcl3GLNJtJ5m9h6lJu9jqgevjy6GfKxu0aAfckwfbkhMTiS8wBAB8o78zuSuCmXuDWhxnQbk8z+bq0w9KnS5PfudWt7cygCbC4VtNmeq2TFmxfnfpCqZfUk+rjo0aQOWynxmOJdAu46k6BAPqHSZEz0nnCTdjDa+Jil4LPlDg57//AJHEQLEaC8DuU3D4oudLjIaDAGkX9goTTihJ3dI7CR+5XaFmnmbShKguyZgkZnSQ2x/mMkgfX2QmZrjmcYE6AXOumwTsRXzeVug/CuYXCuqPaxokn15/YSfRJsSRd0eFtAY6SHEzMyRttbrCuuCcXYT/AIXENE6NdAAENAkHb5c3cyhfi3EGi9nhtaKZGaNTtYnURf1VLjqzajPEYwGIDhN26/TqFlG32aNV0amlw7OauGqAF0g03C0zds9wTc7lVeEYKGLEszNPlLXaOBsQen2KrqfxFWdlLod4bYneBYSfVWmJ4zSeM9Vsu2LSLu8t+fMq1rRL3svh8PUA9zXMysc6WEE+UEA5SDYEHcahDcTwr8M0scQ6m8ZZDTDmZpaCNGvYSSOhJ6IbAcZa14aXtIdDYkQ4CIj7rQ1iyqzw3iWunKTqHASOxgEd2xuk3T2NK1owVNriHtcZDSL7tJMAg/T1CEdQIJAEmfeBNlf1sBmpvY0AVKZkhv8A1WtJI9YO39UBWwvyPaZaDfmAdCfUaq+RHEAnO03AyjQwCdxE6nZH8IfVLJY43kETblMdYIJF7IPibYqOE2BFo+UHzR6fsjqFI0XlvzNc0ua5omZDXNg7GxHcpN60NLeyJ2Noz5iWnQgxIPskqurVLyXeW/8AKElr8kjLhE9U+JcW0Yeo2qLmBHO/1g/QnovNaxcw622P2nmCvRPiqgH4dwEOIgtOptFu/wCy87c4jyuEEc/sei5vHa4nVnWx1HGMPkexpEzpod4RjsSS2BEDYcuY7clSPAm2n2RGEqgmMxHt9ZMLoswo5jL3Gu/XS8baj3Tm4J4YHfT7eqvKHD3QXU4cRE5HNqHrmymQN+SbSN3E2ky4QYEx7ITTBoBo1oiREjl+6sMDjC10weRGkp+E4e2Ybck9wFd4bh9On53ubbTZs+uquKZEhYbCGtq3Kw7kXPaNO6uMJgWUm5WCB3k/VB0+LUmN81RhP8s+nMlDV/iKlaHHW9u/PrC0tEUT/EOHz0o2BE9vwrAf5cXVSACRMk7AdSVscVxhrqZyEtJMQ63lOt1UVMa0CG+Y7AaTtcaLOdM0iA4umyifLL6h0J0Z+0oXK2n5qp1vlHzHrqD6mPVScRpuDfEJGabfvlH/ACqhlS8m55lZs0RdUsY7LYeFTn5W/O89Tt3UHE2yW07NYBmdf9R29PugjiY3v9u3LuhalWUMRZOxQ+VnlB+Zx1PS2g6dVBia8eVgItqbEoJlQj86QkQQ6HWU2Mn4c0F8OmIJPoDf3XGU8740EkkxoE7DDymIl1vz6I6ph/CpwCJN5nXf+iAA8bWmABAtA5DYe0Id7rQuPqx3P0TLkoA607AdT2/IV98N0RnL3QXfKGzHlIvf1A9+aq6NPKO/7c1x1QtMjUX9lL2qGnWzQcceC3wixwcPO29iJuADvAvG8qjpuc1mZoEfKZE2PmH2I9OqsMY4v8OqHE5mjMP4XT5onYyPdMdgiA5p5GO8yPt9U4R/GhSl+VlGeidntbndT0qNpOxIjmdvTW/RMNEnTbWBZMkjjy9/Xrp6ItmNrQ0Go+BcDMbHYjkhcvNOzygdlnT45WsTBI0Oh9SNdlaUOPUnEPLSyoZDxEsfyPQ87dVly+3dOYEqQWzRcT4cD/qU3ZmO03y2s0naNEzgjAHXMXFj0I+uvsq7huJc2QDAOo5/1RD618wsVLeqZS+yxxnB2Z3S7KZkgRAm9rix19V1SUeJ2HncOkSkptlUgvDcXfia0Uw54nzgiGAXg57H6SqP4vgVyGuY5oGrABHMEjWEN8PcdOGeSSch1AgieZHurXH8MpVWl9HyvPmgmWvt+k7drhYJLHP+HQ7yQ/plJ2RBqtaPKTO+nIdEJUfBhwII1/CuNGY6wOZXWcoQyu6YDj9vqr3gXHjhamcSZEObchwi0yBMFUFNhHyke4nuu16R1cTrcyDKT32NaNhR4jSxdZop4ctcT5shIpxucpPlGs3V3TwOFy5DWD3uc40zSdLQBEMLHGx1iDosJw7Huw7s9JzRAkEfMOdjr9V2jxupmZkJzAkizbE2tAt/ZS1L0yk17R6DV4AH0xVpUn2hrmEjMdpBaTYnVp9FTV+H5XZahZTNpzO5nlEgiQSNboSlj6tQQ+tlP8IeWnnNtUn4gVC1jiS65kumTtqeeySlNLsOMG9I5i+FZ3FrDLGtLnPdmY2AYkMJzO05XV5Q4RhhhXmnTNUwJdEFpIiQW3gW0te5Q2B+H6j2mKREiC4ww9yCbQosVWfTz0m4ljATcU5dfcSAR3bN52Wc5Sfs0jGK9GU4jRyOIqCsLAtzQbHSSJCqst7++v21W4xgeKLHeHUcHiMxhzXuvsQYtsYlB1+GCrTlrWU6gu0tEA9HSSAeRsms1fsJ4b/UyIFtevokXJ76Lg4gggg3Gh+qidra4W5gdL1PijZvOEOGXgXKcwFxgAk8kASMqadE6tXc43JP2UlPBmfP7f1UuLqtp+UXJFvVQ5+kXw9srSbo3D0oEn85KLB0PMA7Ui35zVtWaBFrfcbeqfISQKRYnrZC5HOdHWO14RL2zN7j6plAERMz+R+dECou+EYdzqNVrp+XOw2sRa3eI9Vnm4p4NnFX78WW0XBpyuywdpBNwD2kLOZcxtH2CIN7CS0hVK5cSSddVKKsCNbj2H/KfT4a86QfVD16bmOyuEEc1VkUT+LLXeke8/ZQh9uyaO6YUDolkff+y6HJh6JzHIAnoPui8yrg6FO2sk0NBBq9UkOHdQuJcRlW88kVgeIVKXymRu03afQ6IV6ZKbVjTro0dLF0K5l7cr94dr7iHeonqpDwHMJpva7oZaf/ABJlUuCofrO22h+quaGNayHOzDu2/wDf0WLTX6msWn+wC7htRpIaQTyBBP1g/RCVXkWdM8j/AHVxXOZ/iCDPQg9JOqa7Gl0B9Jrr7kEek3lUpMlxRS+JzCnwuJy3H9P2RGIpMBs1wB5EOH1Ij3KdR4Q038Qtn+Jn7gquSJ4sLZxBpbGTbUm572Q7MS5/nBDQASRHLqp3cEfqKrCD0d+wKiw3CasOaC24i8t0uQJAnRSmimmgluPLoDqzyDs9ziB2za/2VphuDuJjyATJMgRvcehVG3hWIFsgIifmuAEZR4VXNnNjoXAjtE9/olJ17HFN+jZ4fjlIFlB8VKWXw3Obo1zY8zRt/wAxMp/EeBPpjxaUVKZFnNvbqOn50zeE4LUG9NsRq6PaAtDwzGHDQ91UkX8jJh1t82vsuaSV6OmLdbMV8Vf9Mx5odffaAs84m86/dbPjNZ9d2ZpAbctGRrcoO1vMfW6qf8M+Y8QH0c76OEfVdeOSUds5MiblpMz4ceqveC4iiBldDXfxc+8rtfhLKkObmboDFPfqAe2iEr8Dc0gZhcSNp990pSjLVlRjKLui5xGFcPNlkcxdUeLwbi7NFvYq2wLa2HYCajXN3aZIaDbUG3YBT+Wtek5zTuMpdT/t7LGMqZrKKkv+Gdom+UjQ76x0/N1O/FHzNmYNjzCtuIUqtNhz0w8Rq28dxqOazj6jYs31W0alsxknHQQ3EyLj+spzsS7t6aoei9sxb87IvFtBZLTcAc9By/NlejMiDcxu6T2RNPh8auEdZ29UDh3GxCJxWK8paJvbrqCfpZDAt8BixBLAPLa8EnrfZC4vGgmX02OiwzA2HcG6qMPiSyy7VryFHHZfJUSVq7SZZTa3oJI/8iVx2JcdYI7AfYKAPTC66qiWwh0bJoUedSAzdVZNCnmnNfdcI3CiEiUwCCVxQeKRskgVEdRwU+Dw8mSJHLmlh6TBd57AalFDiIAhrB3N/wCilt+jRJewim1wl05RtAFuiBxFcuI0mbBQVcS92riemg+ihhSojcrLijxGmBlcAdZgkH0Ish2Yg5jDiBfV2WBtPMoDNyCYjiJyZa0aWHF6j8x6T19T7bq4rcPpVA2KmUwIblPPnKoOH4W+dwMbIzG1CCSIO3/A/dRJW9M1i6W0XeA4fQy5DiKgI5jy68jKG4jwysLeK3KT+kOjeNo0CoqGNc35XG9yPzVH/wCbXm4MRIJBHa5H0UcJJ3ZXODVBdHANaSLOMWc57my/XyggD3VphOMlgDK1F0wLiZ9CZkdlS1sUMssdlc7kAO8wYN+iA/xFQWNR5HcpPHy7Gp8OjX1X+JdjngDXO1zRysYjluE4Yd5bIyzuZlv0f3WNHEqgtnJB53++imbj3b5XdCAVPwspZkbClhHObBa3oZdFjvIkaDdPo8PsclSkGbw5pje25usfQ4hlsGgf7bKaniJOZsA7kHKfbmp+KX2V8sTRVqDpJyVXa/K2Gk/9x/ZVeLoPPz0paNMpDjvYkXnsEA59S5bkJ3vlf/4EfVTUuOvaMrvFFos4nbqqUWuiHJPsacHTqyQHNjYkmTeeuqhp0TT+QQTYtMGe1h9/RSYzFtq3DnSBeSQXd7dvZAGvAj9yfuStVbM3SLk8UeYOh3FjPQgpCnT+ZnlHIWF9iDKoxiiJiDPS647Fen7o+Oug+S+y3qhmV7XwRbKYBj7FU1RwBMGRpqfsV2niiNz902oWu2hXGLREpJjQ7koyTM7qVuHB0P0ldFI9D6qzMgcQehXMhT3MTWuKAFqLJzWps7j/AIT2DqgBr7n0TQ5Oed/RRlMCbOdVIQHIemeacx4BQA80zy+qSeandJMRAeaUriSQzhKa6ySSGB1oUlFklJJSCLLFPApho5hQYk5st7RBH56JJKF1Zo/oCSzJJKyB4epGO9yISSSGiBhuTyTmuSSTJE56jzldSQOx7cQ7n26dk+rXedT9kkkUFsQxtQWLp6FONQuukkigTYw1zpJ/ougg6j1SSQAx9OL6hNBSSQhM6KpF5Tv8Sd7pJIAfmB/uo3BJJADZT2OSSTA64SoHhdSTEcF0idCupIGdMLqSSAP/2Q==);
            background-repeat: no-repeat;
            background-size: cover;
        }


        form {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(30px);
            border-radius: 1rem;
            border: 1px solid #ccc;
            padding: 20px;
            width: 500px;
            margin: 0 auto;


        }


        h1 {
            text-align: center;
            color: #fff;
        }

        h3 {
            text-align: center;
            color: #fff;
        }

        label {
            display: contents;
            margin-bottom: 8px;
            font-family: 'Times New Roman', Times, serif;
        }

        p {
            font-family: 'Poppins';

        }

        input[type="text"],
        select,
        textarea {
            width: 96.5%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #cccccc;
            border-radius: 3px;
        }

        input[type="radio"],
        input[type="checkbox"] {
            margin-right: 5px;
        }

        button[type="submit"] {
            background-color: white;
            color: black;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: green;
        }
    </style>
</head>
<body>
    <h1 style="font-family: 'Poppins';">Buat Account Baru</h1>
    <h3 style="font-family: 'Times New Roman', Times, serif;">Sign Up Form</h3>
    <form action="welcome.php" method="get">
    <label for="fname" style="color: #ffffff;">First Name :</label> <br> 
    <input type="text" id="fname" name="fname" required> <br> <br>
    <label for="lname" style="color: #fff;">Last Name :</label> <br>
    <input type="text" id="lname" name="lname" required>
    <p style="color: #fff;">Gender</p>
    <input type="radio" id="male" name="gender" value="Laki-laki" required>
    <label for="male" style="color:#fff;">Male</label> <br>
    <input type="radio" id="female" name="gender" value="Perempuan" required>
    <label for="female" style="color: #fff;">Female</label>
    <p style="color: #fff;">Nationality</p>
    <select name="nationality" id="" >
        <option value="indonesian">Indonesia</option>
        <option value="american">Dengklok City</option>
        <option value="english">Johar City</option>
        <option value="english">Klari City</option>
    </select>
    <p style="color: #fff;">Language Spoken</p>
    <input type="checkbox" id="indo" name="language[]" value="Indonesia">
    <label for="indo" style="color: #fff;">Bahasa Indonesia</label> <br>
    <input type="checkbox" id="english" name="language[]" value="Inggris"> 
    <label for="english" style="color: #fff;">English Language</label> <br>
    <input type="checkbox" id="sunda" name="language[]" value="Sunda"> 
    <label for="sunda" style="color: #fff;">Basa Sunda</label> <br>
    <input type="checkbox" id="other" name="language[]"> 
    <label for="other" style="color: #fff;">Other</label>
    <p style="color: #fff;">Bio</p> 
    <textarea name="bio" id="" cols="30" rows="10"></textarea><br>
    <button type="submit" style="font-family: 'Poppins';">Sign Up</button></a>
    </form>
</body>
</html>
